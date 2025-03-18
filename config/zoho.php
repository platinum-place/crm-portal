<?php

return [
    'user' => env('ZOHO_USER'),
    'url' => [
        'token' => env('ZOHO_URL_TOKEN'),
        'crm_api' => env('ZOHO_URL_CRM_API'),
        'redirect' => env('ZOHO_REDIRECT_URI'),
    ],
    'client_id' => env('ZOHO_CLIENT_ID'),
    'client_secret' => env('ZOHO_CLIENT_SECRET'),
    'grant_token' => env('ZOHO_GRANT_TOKEN'),
];
