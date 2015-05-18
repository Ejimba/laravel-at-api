<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | API Key for Africa's Talking API
    |
    | Supported: string
    |
    */

    'api_key' => '',

    /*
    |--------------------------------------------------------------------------
    | Username
    |--------------------------------------------------------------------------
    |
    | Username for Africa's Talking API
    |
    | Supported: string
    |
    */

    'username' => '',

    /*
    |--------------------------------------------------------------------------
    | URL
    |--------------------------------------------------------------------------
    |
    | URLs for the application's endpoints.
    |
    | Supported: string
    |
    */

    'url' => array(

        'sms_url' => 'http://api.africastalking.com/version1/messaging',
        
        'voice_url' => 'https://voice.africastalking.com',
        
        'user_data_url' => 'https://api.africastalking.com/version1/user',
        
        'subscription_url' => 'https://api.africastalking.com/version1/subscription',

        'airtime_url' => 'https://api.africastalking.com/version1/airtime',
    
    ),
);