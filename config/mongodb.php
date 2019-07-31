<?php

return [
    'class'    => 'yii\mongodb\Connection',
    'dsn'      => env('MONGODB_DSN', '127.0.0.1'),
    'username' => env('MONGODB_USERNAME'),
    'password' => env('MONGODB_PASSWORD'),
    'charset'  => env('MONGODB_CHARSET', 'utf8mb4'),
];