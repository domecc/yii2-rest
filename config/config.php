<?php

$mysql      = require 'mysql.php';
$redis      = require 'redis.php';
$mongodb    = require 'mongodb.php';
$params     = require 'params.php';
$modules    = require 'modules.php';
$components = require 'components.php';

return [
    'id'          => env('YII_APP_ID'),
    'language'    => env('YII_LANGUAGE'),
    'timeZone'    => env('YII_TIME_ZONE'),
    'basePath'    => PATH_ROOT,
    'params'      => $params,
    'modules'     => $modules,
    'aliases'     => [
        '@app'     => PATH_ROOT,
        '@runtime' => PATH_RUNTIME,
    ],
    'components'  => array_merge([
        'db'      => $mysql,
        'redis'   => $redis,
        'mongodb' => $mongodb,
    ], $components),
    'runtimePath' => PATH_RUNTIME,
];