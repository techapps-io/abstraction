<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    */

    'hashid' => [
        'encrypt' => env('HASHID_ENCRYPT', true),
        'salt' => env('HASHID_SALT', 'random'),
        'min' => env('HASHID_MIN', 10),
    ],
];
