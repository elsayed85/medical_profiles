<?php
return [
    "vapulus" => [
        "baseurl" => "https://api.vapulus.com:1338/",
        "failUrl" => "",
        "successUrl" => "",
        'app_id' => env('VAPULUS_AppID'),
        'password' => env('VAPULUS_password'),
        'hash' => env('VAPULUS_HASH')
    ]
];
