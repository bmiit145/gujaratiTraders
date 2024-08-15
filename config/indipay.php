<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Indipay Service Config
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo / ZapakPay / Paytm / Mocker
    */

    'gateway' => 'CCAvenue',

    'testMode'  => false,                   // True for Testing the Gateway [For production false]

    // 'CCAvenue' => [                         // CCAvenue Parameters
    //     'merchant_id'  => '3475898',
    //     'merchantId'  => '3475898',
    //     'accessCode'  => 'AVPL87LE16BH99LPHB',
    //     'access_code'  => 'AVPL87LE16BH99LPHB',
    //     'workingKey' => '5AD19500EE45AA52D4BF592496BF1008',

    //     // Should be route address for url() function
    //     'redirectUrl' => env('CCAvenue_Redirect_Url', 'indipay/response'),
    //     'cancelUrl' => env('CCAvenue_Cancel_Url', 'indipay/response'),
    //     'mode' => env('CCAvenue_Mode', 'secure'), 

    //     'currency' => env('INDIPAY_CURRENCY', 'INR'),
    //     'language' => env('INDIPAY_LANGUAGE', 'EN'),
    // ],
    
    // 'ccavenue' => [
    //     'merchantId'  => '3475898',
    //     'accessCode'  => 'AVPL87LE16BH99LPHB',
    //     'workingKey' => '8E20420002E1324E6F7A250A70E3AC77',

    //     // Should be route address for url() function
    //     'redirectUrl' => env('CC_AVENUE_REDIRCTURL', url('paymetnt/response')),
    //     'cancelUrl' => env('PAYU_CANCEL_URL', url('paymetnt/cancel')),

    //     'mode' => 'secure',

    //     'currency' => 'INR',
    //     'language' => 'EN',
    // ],

    'payumoney' => [                         // PayUMoney Parameters
        'merchantKey'  => env('PAYU_MERCHANT_KEY', ''),
        'salt'  => env('PAYU_MERCHANT_SALT', ''),
        'workingKey' => env('PAYU_WORKING_KEY', ''),
        
        'successUrl' => env('PAYU_SUCCESS_URL',  'paymetnt/response'),
        'failureUrl' => env('PAYU_FAILURE_URL', 'paymetnt/cancel'),
        'cancelUrl' => env('PAYU_CANCEL_URL', 'paymetnt/cancel'),

        'currency' => 'INR',
        'language' => 'EN',
    ],

    'ebs' => [                         // EBS Parameters
        'account_id'  => env('INDIPAY_MERCHANT_ID', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'return_url' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
    ],

    'citrus' => [                         // Citrus Parameters
        'vanityUrl'  => env('INDIPAY_CITRUS_VANITY_URL', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'returnUrl' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
        'notifyUrl' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
    ],

    'instamojo' =>  [
        'api_key' => env('INSTAMOJO_API_KEY',''),
        'auth_token' => env('INSTAMOJO_AUTH_TOKEN',''),
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'indipay/response'),
    ],

    'mocker' =>  [
        'service' => env('MOCKER_SERVICE','default'),
        'redirect_url' => env('MOCKER_REDIRECT_URL', 'indipay/response'),
    ],

    'zapakpay' =>  [
        'merchantIdentifier' => env('ZAPAKPAY_MERCHANT_ID',''),
        'secret' => env('ZAPAKPAY_SECRET', ''),
        'returnUrl' => env('ZAPAKPAY_RETURN_URL', 'indipay/response'),
    ],

    'paytm' =>  [
        'MERCHANT_KEY' => env('PAYTM_MERCHANT_KEY',''),
        'MID' => env('PAYTM_MID', ''),
        'CHANNEL_ID' => env('PAYTM_CHANNEL_ID', 'WEB'),
        'WEBSITE' => env('PAYTM_WEBSITE', 'WEBSTAGING'),
        'INDUSTRY_TYPE_ID' => env('PAYTM_INDUSTRY_TYPE_ID', 'Retail'),
        'REDIRECT_URL' => env('PAYTM_REDIRECT_URL', 'indipay/response'),
    ],

    // Add your response link here. In Laravel 5.2+ you may use the VerifyCsrf Middleware.
    'remove_csrf_check' => [
        'indipay/response'
    ],
];