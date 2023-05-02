<?php

return [
    'shipping_method' => [
        'choose_sending_method' => 'Choose sending method',
    ],
    'error' => [
        'error_page' => 'There was an error',
    ],
    'list_shipments' => [
        'title' => 'Shipment List',
    ],
    'print_labels' => [
        'print_label' => 'Print labels',
        'fetch_all' => 'Print all labels',
        'print_label_fulfill' => 'Print labels & Fulfill',
        'return_label' => 'Print return label',
        'description' => 'List of created shipments',
        'order_id' => 'Order ID',
        'date' => 'Date',
        'time' => 'Time',
        'service' => 'Service',
        'fulfilled_products' => 'Fulfilled Products',


        'tracking_code' => 'Tracking code',
        'status' => 'Status',
        'get_the_label' => 'Get the shipping label',
        'get_label_link' => 'Link',
        'back_to_orders' => 'Back to orders list',
        'statuses' => [
            'created' => 'Shipping has been created',
            'sent' => 'Shipping for the order already exists',
            'need_shipping_address' => 'Failed due to absence of shipping address',
            'no_shipping_service' => 'Shipping service for the rate is not set',
            'not_in_inventory' => 'Product is not in inventory',
            'product_deleted' => 'Product not found, fulfill manually',
            'nothing_to_ship' => 'No products to ship',
        ],
    ],
    'custom_shipment' => [
        'title' => 'Custom Shipment',
        'service_title' => 'Shipping service',
        'unfulfiled_products' => 'Unfulfiled Products',
        'additional_service_title' => 'Additional service',
        'address_title' => 'Shipping address',
        'create_button' => 'Create Shipment',
        'save_successful' => 'Shipment updated successfully',
        'save_failed' => 'Shipment update failed',
        'pickups_title' => 'Pickup points',
        'not_selected' => 'Shipping method not selected',
        'multiparcel_title' => 'Packets',
        'products_title' => 'Products',
        'product_name'  => 'Name',
        'product_ship'  => 'Ship',
        'product_remains'  => 'Remains',
        'product_shipped'  => 'Shipped',
        'product_total'  => 'Total',
        'no_products' => 'No products to ship',
        'hazardous_substances' => 'Weight (grams)',
        'qty_dangerous_products' => 'Quantity',
        'dangerous_goods' => 'Dangerous goods'

    ],
    'settings' => [
        'only_default' => 'Only "Default shipping method" works on a order using above method. Limit in Shopify requires name of the price to be unique in different shipping zones.',
        'default_shipping' => 'Use default shipping method',
        'no_shipping_method' => 'No shipping label',
        'no_shipping' => 'No shipping label',
        'activation_code' => 'Activation code',
        'create_activation_code' => 'Create activation code for every shipment. Activation code is added to order Notes, so it might be visible to the end user.',
        'create_activation_code_desc' => 'Use only if you do not print shipping labels',
        'add_additional_label_info' => 'Add additional text on label',
        'additional_label_info' => 'Additional text on label',
        'default_additional_label_info' => "Order number {ORDER_NUMBER}\nItems: {PRODUCTS_NAMES}\nSKU: {PRODUCTS_SKU}",
        'order_number' => 'Order number',
        'products_names' => 'Names of the goods in the shipment',
        'products_sku' => 'SKU codes of the goods in the shipments',
        'testmode_on' => 'Enable testmode',
        'testmode_off' => 'Disable testmode',
        'latest-news' => 'Latest news',
        'pickuppoints-settings' => 'Pickup points',
        'api-settings-pakettikauppa' => 'Pakettikauppa API',
        'api-info-pakettikauppa' => 'You can find your API credentials from <a href="https://hallinta.pakettikauppa.fi/profile#api-keys" target="_blank">your Profile page</a> in Pakettikauppa merchant panel. If you are not registered to Pakettikauppa, you can do it from <a href="https://www.pakettikauppa.fi/" target="_blank">https://www.pakettikauppa.fi/</a>',
        'api-settings-posti' => 'Posti API',
        'api-info-posti' => '',
        'api-settings-itella' => 'Itella API',
        'api-info-itella' => '',
        'generic-settings' => 'Other',
        'settings' => 'Settings',
        'language' => 'Language',
        'shipment_settings' => 'Shipment settings',
        'default_shipping_method' => 'Default shipping method',
        'pickup_filter' => 'Filter pickup points',
        'shopify_method' => 'Shipping method from shopify',
        'pk_method' => 'Shipping method in PK',
        'pakettikauppa_method' => 'Shipping method in Pakettikauppa',
        'posti_method' => 'Shipping method in Posti',
        'itella_method' => 'Shipping method in Itella',
        'company_info' => 'Company information',
        'testing' => 'Testing',
        'company_name_pakettikauppa' => 'Pakettikauppa',
        'company_name_posti' => 'Posti',
        'company_name_itella' => 'Itella',
        'instructions' => 'Learn more about the application at the <a href=":instruction_url">:company_name Help Center</a>.',
        'shipping_method' => 'Shipping method',
        'additional_services' => 'Additional services',
        'business_name' => 'Business name',
        'address' => 'Address',
        'postcode' => 'Postcode',
        'city' => 'City',
        'country' => 'Country',
        'email' => 'Email',
        'phone' => 'Phone',
        'enable_carrier_api' => 'Enabling pickup points requires the activation of the <a style="font-weight:bold" href="https://shopify.dev/docs/api/admin-rest/2023-01/resources/carrierservice" target="_blank">CarrierService API</a>. The API is automatically enabled on the Advanced Shopify and Shopify Plus plans. <a style="font-weight:bold" href="https://help.shopify.com/en/messages" target="_blank">By contacting Shopify Support</a>, the API can also be activated on the Shopify Plan. This will cost 17 EUR per month on the monthly Shopify plan, but it is included in the price of the annual Shopify plan. You can switch plans from <b>Admin > Settings > Plan</b>. </a>. The CarrierService API is not available on the Basic Shopify or Shopify Starter plan. For more information, <a href="https://help.shopify.com/en/manual/shipping/setting-up-and-managing-your-shipping/enabling-shipping-carriers" target="_blank">click here</a>'.
        'pickuppoint_providers' => 'Which service providers are used?',
        'pickuppoints_count' => 'How many pickup points are shown as result?',
        'pickuppoints_count_0' => 'Don\'t show pickup points',
        'cash_on_delivery' => 'Cash on delivery settings',
        'iban' => 'Bank account number',
        'bic' => 'BIC code',
        'test_mode' => 'Enable test mode',
        'save_settings' => 'Save settings',
        'api_key' => 'API key',
        'api_secret' => 'API secret',
        'saved' => 'Settings have been saved',
        'save_failed' => 'Failed to save changes',
        'print_return_labels' => 'Always create shipping label for return. Tracking in Shopify does not include return shipment.',
        'include_discounted_price_in_trigger' => 'Use discounted price for trigger price.',
        'info_code' => 'Info code for shipments',
        'pickuppoints' => [
            'title' => 'Pickup point settings',
            'provider' => 'Provider',
            'base_price' => 'Base price (€)',
            'trigger_price' => 'Trigger price (€)',
            'triggered_price' => 'Triggered price (€)',
            'all' => 'All',
            'private_lockers' => 'Private Lockers',
            'outdoor_lockers' => 'Outdoor Lockers',
            'pickup_points' => 'Pickup Points',
            'agencies' => 'Agency',
            'parcel_lockers' => 'Parcel Lockers',
            'limit_pickup_points_by_weight' => 'Limit pickup points by weight?',
            'yes' => 'Yes',
            'no' => 'No',
        ],
        'support' => 'Support',
    ],

    'messages' => [
        'activate_app_to_browser' => 'Allow this browser to use Pakettikauppa app',
        'error' => 'Error',
        'no_api' => 'No API credentials are set',
        'ready' => 'Everything is ready',
        'only_test_mode' => 'Without API credentials you can use the application only in test mode',
        'no_api_set_error' => 'Setup API credentials or turn on the test mode in <a href=":settings_url">Settings</a>.',
        'credentials_missing' => 'Please input API credentials first',
        'invalid_credentials' => 'API credentials are not valid',
        'no_tracking_info' => 'Tracking information for the order is not available',
        'success' => 'Task was successful!',
        'fail' => 'Procedure has failed',
        'api_credentials_saved' => 'API credentials have been successfully saved. Go to the next step.',
        'wait_for_email' => 'Wait for an email from our sales team',
        'register_first' => 'You must register first',
        'in-testing' => 'Your integration is now in test mode!',
        'in-production' => 'Your integration is now in production mode!',
        'failed-test-mode' => 'Could not switch Test Mode',
        'access_denied' => 'Access denied. Go to Apps setting page'
    ],
    'tracking_info' => [
        'transaction' => 'Transaction',
        'title' => 'Tracking information',
        'status' => 'Status',
        'postcode' => 'Postcode',
        'post_office' => 'Post office',
        'timestamp' => 'Event timestamp',
    ],

    'status_codes' => [
        "31" => [
            "full" => "Item is in transport",
            "short" => "In transport"
        ],
        "22" => [
            "full" => "Item has been handed over to the recipient",
            "short" => "Delivered",
        ],
        "56" => [
            "full" => "Item not delivered – delivery attempt made",
            "short" => "Not delivered",
        ],
        "48" => [
            "full" => "Item is loaded onto a means of transport",
            "short" => "In transit",
        ],
        "71" => [
            "full" => "Item is ready for delivery transportation",
            "short" => "In delivery",
        ],
        "91" => [
            "full" => "Item is arrived to a post office",
            "short" => "In post office",
        ],
        "77" => [
            "full" => "Item is returning to the sender",
            "short" => "Returning",
        ],
        "38" => [
            "full" => "C.O.D payment is paid to the sender",
            "short" => "Paid",
        ],
        "68" => [
            "full" => "Pre-information is received from sender",
            "short" => "Pre-informed",
        ],
        "13" => [
            "full" => "Item is collected from sender - picked up",
            "short" => "Collected",
        ],
        "99" => [
            "full" => "Outbound",
            "short" => "Outbound",
        ],
        "45" => [
            "full" => "Informed consignee of arrival",
            "short" => "Informed",
        ],
        "20" => [
            "full" => "Exception",
            "short" => "Exception",
        ],
    ],
];
