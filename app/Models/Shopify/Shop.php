<?php

namespace App\Models\Shopify;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shopify\Shipment as ShopifyShipment;
use Pakettikauppa\Shipment;
use Pakettikauppa\Shipment\Info;
use Pakettikauppa\Shipment\Parcel;
use Pakettikauppa\Shipment\Receiver;
use Pakettikauppa\Shipment\Sender;
use Pakettikauppa\Shipment\AdditionalService;
use Psy\Exception\FatalErrorException;

class Shop extends Model
{
    protected $table = 'shopify_shops';

    /**
     * @var $pk_client \Pakettikauppa\Client
     */
    public function sendShipment($pk_client, $order, $senderInfo, $receiverInfo, $isReturn = false){

        $sender = new Sender();
        $sender->setName1($senderInfo['name']);
        $sender->setAddr1($senderInfo['address']);
        $sender->setPostcode($senderInfo['postcode']);
        $sender->setCity($senderInfo['city']);
        $sender->setCountry($senderInfo['country']);

        $receiver = new Receiver();
        $receiver->setName1($receiverInfo['name']);
        $receiver->setAddr1($receiverInfo['address']);
        $receiver->setPostcode($receiverInfo['postcode']);
        $receiver->setCity($receiverInfo['city']);
        $receiver->setCountry($receiverInfo['country']);
        $receiver->setEmail($receiverInfo['country']);
        $receiver->setPhone($receiverInfo['phone']);

        $info = new Info();
        $info->setReference($order['id']);

        $parcel = new Parcel();
        $parcel->setReference($order['id']);
        $parcel->setWeight($order['total_weight'] * 0.001); // kg
        $parcel->setVolume($order['total_weight'] * 0.000001); // m3
        $parcel->setContents('');


        $method_code = null;

        if(isset($order['shipping_lines'][0]['title'])){
            $shipping_settings = unserialize($this->shipping_settings);
            $service_name = $order['shipping_lines'][0]['title'];

            foreach($shipping_settings as $item){
                if($item['shipping_rate_id'] == $service_name){
                    $method_code = $item['product_code'];
                }
            }
        }

        if(!isset($method_code)){                                  // use default shipping method
            $method_code = $this->default_service_code;
//            $order['status'] = 'no_shipping_service';
        }

        $shipment = new Shipment();
        $shipment->setShippingMethod($method_code);
        $shipment->setSender($sender);
        $shipment->setReceiver($receiver);
        $shipment->setShipmentInfo($info);
        $shipment->addParcel($parcel);

//        $add_services = unserialize($this->additional_services);
//        foreach($add_services as $service_code){
//            $additional_service = new AdditionalService();
//            $additional_service->setServiceCode($service_code);
//            $shipment->addAdditionalService($additional_service);
//        }

        try {
            $pk_client->createTrackingCode($shipment);
            $pk_client->fetchShippingLabel($shipment);

            $tracking_code = (string) $shipment->getTrackingCode();
            $reference = (string) $shipment->getReference();

            $shopify_shipment = new ShopifyShipment();
            $shopify_shipment->shop_id = $this->id;
            $shopify_shipment->order_id = $order['id'];
            $shopify_shipment->tracking_code = $tracking_code;
            $shopify_shipment->reference = $reference;
            $shopify_shipment->test_mode = $this->test_mode;
            $shopify_shipment->return = $isReturn;
            $shopify_shipment->save();

        } catch (\Exception $ex)  {
            $order['status'] = 'custom_error';
            $order['error_message'] = $ex->getMessage();
            return $order;
        }

        $order['status'] = 'created';
        $order['tracking_code'] = $tracking_code;

        return $order;
    }
}