<?php

// 解决跨域问题
header('Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, DELETE');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');

// 测试环境
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

//// 生产环境
//defined('YII_DEBUG') or define('YII_DEBUG', false);
//defined('YII_ENV') or define('YII_ENV', 'prod');

// 根目录、缓存目录
defined('PATH_ROOT') or define('PATH_ROOT', dirname(__DIR__));
defined('PATH_RUNTIME') or define('PATH_RUNTIME', dirname(__DIR__) . '/runtime');
// 系统域名
defined('SITE_URL') or define('SITE_URL', 'site.cc');
// 载入配置参数
require(PATH_ROOT . '/config/env.php');
// 载入YII核心
require(PATH_ROOT . '/vendor/autoload.php');
require(PATH_ROOT . '/vendor/yiisoft/yii2/Yii.php');

$config = require PATH_ROOT . '/config/config.php';
$application = new \yii\web\Application($config);
$application->run();