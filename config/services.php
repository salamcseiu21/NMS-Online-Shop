<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
    'client_id' => '284733205380418',
    'client_secret' => 'ac463296a9ed861020848669938a465e',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
   'google' => [
    'client_id' => '139596192475-n3pqc7s71eheo53ga9gk20fiqpf4fpqu.apps.googleusercontent.com',
    'client_secret' => 'TV3dCKZS5XY9hRdB-fQMjvo3',
    'redirect' => 'http://localhost/nmsonlineshop.com/auth/google/callback',
    ], 
    'github' => [
    'client_id' => '754c91a935db31422155',
    'client_secret' => 'c8e11099d10253b6693d4ebbfcd1534d4b60c31f',
    'redirect' => 'http://localhost/nmsonlineshop.com/auth/github/callback',
],
'twitter' => [
    'client_id' => 'S3961EvzTvrv31oJsciMZBF6v',
    'client_secret' => 'X8qOEpO0r0mJkfI62OEWT5Pm4yrebA5rAt2i19N7uz8zyyGwpN',
    'redirect' => 'http://localhost/nmsonlineshop.com/auth/twitter/callback',
],
];
