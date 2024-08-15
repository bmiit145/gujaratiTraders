<?php 


return [
    'merchant_key' => env('PAYU_MERCHANT_KEY', ''),
    'merchant_salt' => env('PAYU_MERCHANT_SALT', ''),
    'auth_header' => env('PAYU_AUTH_HEADER', ''),
    'base_url' => env('PAYU_BASE_URL', 'https://secure.payu.in'),
];
