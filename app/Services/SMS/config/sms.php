<?php

return [
    'driver' => 'mvayoo',

    'from' => env('SMS_FROM'),

    'mvayoo' => [

        'username' => env('MVAYOO_USERNAME'),

        'password' => env('MVAYOO_PASSWRD'),

    ]
];
