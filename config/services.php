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
        'client_id' => '146295902498116',
        'client_secret' => '6d63927a1c5dac6b83567936280d6cdb',
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],
    'google' => [
        'client_id' => '1084783703696-gu6a5uu3ep7g4n0bhucmp2ieuevfpai8.apps.googleusercontent.com',
        'client_secret' => 'WfmPPMwOANvupf3TPK005sA6',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

];
