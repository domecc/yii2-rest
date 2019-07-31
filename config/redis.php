<?php

return [
    'class'    => 'yii\redis\Connection',
    'hostname' => env('REDIS_HOSTNAME', '127.0.0.1'),
    'password' => env('REDIS_PASSWORD', ''),
    'port'     => env('REDIS_PORT', 6379),
    'database' => env('REDIS_DATABASE', 0),
];