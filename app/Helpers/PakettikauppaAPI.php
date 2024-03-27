<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Pakettikauppa\Client;

/**
 * @property $http_request
 * @property $http_response_code
 * @property $http_error
 * @property $http_response
 */
class PakettikauppaAPI extends Client
{
//    public function __construct(array $configs = null, $use_config = null)
//    {
//        p
//    }
//
//    public function setSenderSystemName(string $sender_system_name): void
//    {
//        $this->client->setSenderSystemName($sender_system_name);
//    }
//
//    public function getToken(): mixed
//    {
//        return $this->client->getToken();
//    }
//
//    public function setAccessToken($access_token): void
//    {
//        $this->client->setAccessToken($access_token);
//    }

    public function searchPickupPoints($postcode = null, $street_address = null, $country = null, $service_provider = null, $limit = 5, $type = null, $attempts = 1): array|null
    {
        for ($i=1; $i<=$attempts; $i++) {
            Log::debug("Search pickup point attempt: {$i}");
            $result = parent::searchPickupPoints($postcode, $street_address, $country, $service_provider, $limit, $type);

            if (!is_null($this->http_response_code)) {
                return $result;
            }
        }

        return null;
    }

}