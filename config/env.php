<?php
/**
 * 将配置参数都独立于根目录的.env中，而无需每个文件都去打开配置
 */
defined('ENV_PREFIX') or define('ENV_PREFIX', 'PHP_'); // 环境变量的配置前缀

// 加载环境变量配置文件，根据各个项目入口文件的不同，这里需要自己定义
$envFilePath = PATH_ROOT . '/.env';
// 当项目中存在 .env 文件时加载
if (is_file($envFilePath)) {
    $env = parse_ini_file(PATH_ROOT . '/.env', true);
    // 全部转换为大写且以_分割做的命名
    foreach ($env as $key => $val) {
        $name = ENV_PREFIX . strtoupper($key);
        if (is_array($val)) {
            foreach ($val as $k => $v) {
                $item = $name . '_' . strtoupper($k);
                putenv("$item=$v");
            }
        } else {
            putenv("$name=$val");
        }
    }
}

if (!function_exists('env')) {
    function env($name, $default = null)
    {
        // 支持以 . 符号分隔数组
        $result = getenv(ENV_PREFIX . strtoupper(str_replace('.', '_', $name)));
        if (false !== $result) {
            // 如果是布尔值相关的字符串转为布尔值
            if ('false' === $result) {
                $result = false;
            } elseif ('true' === $result) {
                $result = true;
            }

            return $result;
        }

        return $default;
    }
}