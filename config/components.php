<?php
return [
    'cache'        => 'yii\redis\Cache',
    'user'         => [
        'identityClass' => 'yii\web\User',
    ],
    'request'      => [
        'cookieValidationKey' => '@l#!/*W&+e5U-a%3IJnkC3|&nj^jpB#2.J2P',
        'parsers'             => [
            'application/json' => 'yii\web\JsonParser',
        ]
    ],
    'errorHandler' => [
        'class' => 'app\components\exceptions\Handler'
    ],
    'i18n'         => [
        'translations' => [
            '*' => [
                'class'    => 'yii\i18n\PhpMessageSource',
                'basePath' => '@app/components/code',
                'fileMap'  => [
                    'app' => 'message.php',
                ],
            ],
        ],
    ],
    'urlManager'   => [
        'enablePrettyUrl' => true,
        'showScriptName'  => false,//隐藏index.php
//        'suffix'          => '',// 访问地址后缀
        'rules'           => [],
    ],
];