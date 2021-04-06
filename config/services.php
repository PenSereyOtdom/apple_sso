<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    "apple" => [
        "client_id" => "com.minami-cambodia.minadict",
        "client_secret" => "eyJraWQiOiJLVVNENDM1NkhZIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiI4UE45QTY4NlRHIiwiaWF0IjoxNjE3NjkyODY0LCJleHAiOjE2MzMyNDQ4NjQsImF1ZCI6Imh0dHBzOi8vYXBwbGVpZC5hcHBsZS5jb20iLCJzdWIiOiJjb20ubWluYW1pLWNhbWJvZGlhLm1pbmFkaWN0In0.xhpmeJ-STFzmiVrivdeoWFroogoHDOgKh79F4VaapEXAUEbhl9Q1VJ-Yy1bOISwLjnH-IQvoOrNOhkw2PjANsQ",
    ],
];
