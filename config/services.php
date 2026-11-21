<?php

$containerId = env('GTM_CONTAINER_ID', 'GTM-TSLJ6L9X');
$measurementId = env('GA4_MEASUREMENT_ID');

return [

    'google_tag_manager' => [
        'container_id' => is_string($containerId) && preg_match('/\AGTM-[A-Z0-9]+\z/', $containerId)
            ? $containerId
            : null,
    ],

    'google_analytics' => [
        'measurement_id' => is_string($measurementId) && preg_match('/\AG-[A-Z0-9]+\z/', $measurementId)
            ? $measurementId
            : null,
    ],

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

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
