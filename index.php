<?php 
require_once 'PayPal/PayPal.php';

$PayPal = new PayPal('YOUR_EMAIL');

$preference = [
    'items' => [
        [
            'name' => 'Product Name',
            'description' => 'Product Description',
            'quantity' => '1',
            'amount' => '1.99',
            'sku' => 'product_id_18'
        ]
    ],
    'currency' => 'BRL',
    'redirect_urls' => [
        'return_url' => 'https://example.com/return',
        'cancel_url' => 'https://example.com/cancel'
    ],
    'notify_url' => "https://example.com/ipn",
    'no_shipping' => '1',
    'address_override' => '0'
];

$preference = $PayPal->create_preference($preference);