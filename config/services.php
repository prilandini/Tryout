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
        'client_id'     => '1985778191680274',
        'client_secret' => 'c56b0464ed9f0b9dfea4e4ae91e61a9b',
        'redirect'      => '/oauth/facebook/callback',
    ],

    'twitter' => [
        'client_id'     => 'D4ngUX6Dbvw0DkzEjYDoiZpX7',
        'client_secret' => 'nt2TCJzuv1fpK4JJ6QKTPl8lFfiYZxsaYKMapa8TmNGkEii1sW',
        'redirect'      => '/oauth/twitter/callback',
    ],

    'google' => [
        'client_id'     => '626745519689-ro3hkep8ocan5imkfqr0lh0jf3hb0387.apps.googleusercontent.com',
        'client_secret' => 's5Eq-keZ1V0cHmSTllrwf91C',
        'redirect'      => '/oauth/google/callback',
    ],

    'github' => [
        'client_id'     => 'fed38052a1e9c1629975',
        'client_secret' => 'b268cdf02d66764a8862c8f0494f2cce21024100',
        'redirect'      => '/oauth/github/callback',
    ],
    

];
