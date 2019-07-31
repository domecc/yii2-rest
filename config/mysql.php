<?php

return [
    'class'               => 'yii\db\Connection',
    'dsn'                 => env('DB_CONNECTION') . ':host=' . env('DB_HOST') . ':' . env('DB_PORT') . ';dbname=' . env('DB_DBNAME'),
    'username'            => env('DB_USERNAME'),
    'password'            => env('DB_PASSWORD'),
    'charset'             => env('DB_CHARSET'),
    // schema 缓存
    'enableSchemaCache'   => env('DB_ENABLE_SCHEMA_CACHE', false),
    'schemaCacheDuration' => env('DB_SCHEMA_CACHE_DURATION', 60),
    'schemaCache'         => env('DB_SCHEMA_CACHE', 'cache'),
];