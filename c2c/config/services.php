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

    'google' => [
        'client_id' => '360239962825-dhmvp86enp02ucskc6qhiep2r7cqfspp.apps.googleusercontent.com',
        'client_secret' => 'LTiuBd3bFfc2mN1hI-ridxdp',
        'redirect' => 'http://laravel.app/login/google/callback',
    ],

    'facebook' => [
        'client_id' => '358298064603903
',
        'client_secret' => '8db85b781684ac09e703ab6e646b24df',
        'redirect' => 'http://laravel.app/login/facebook/callback',
    ],

];
