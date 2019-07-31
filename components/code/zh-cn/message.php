<?php

use app\components\code\Code;

$messageHttp = require_once __DIR__ . '/message_http.php';

return $messageHttp + [
    // 系统
    Code::NO_ERROR            => '成功',
    Code::SYSTEM_ERROR        => '十分抱歉，系统错误，请联系客服',
    Code::ERROR_CODE_ERROR    => '十分抱歉，错误码不存在，请联系客服',
    Code::APP_DISABLE         => '应用不可用',
    Code::APP_IS_EXIST        => '应用已存在',
    Code::APP_NOT_EXIST       => '应用不存在',
    Code::APP_IS_RUNNING      => '应用运行中',
    Code::APP_IS_AUTH         => '应用已授权',
    Code::APP_NOT_AUTH        => '应用未授权',
    Code::AUTH_SUCCESS        => '认证成功',
    Code::AUTH_FAILED         => '认证失败',
    Code::SIGN_ERROR          => '签名错误',
    Code::KEY_ERROR           => 'key 错误',
    Code::SECRET_ERROR        => 'secret 错误',
    Code::ENCODE_ERROR        => '加密失败',
    Code::DECODE_ERROR        => '解密失败',
    Code::ENCODE_DATA_ILLEGAL => '非法加解密数据',
    Code::PARAMS_ERROR        => '参数错误',
    Code::PARAMS_ILLEGAL      => '参数非法',
    Code::PARAMS_MISSING      => '参数缺失，请检查',
    Code::PARAMS_INVALID      => '无效参数，请检查',
    Code::SYSTEM_BUSY         => '系统繁忙，请稍后',
    Code::SYSTEM_UPGRADE      => '系统升级，请稍后',
    Code::VERIFY_ERROR        => '验证错误，请重试',
    Code::FORMAT_ERROR        => '格式错误，请重试',
    Code::CREATE_ERROR        => '创建失败，请重试',
    Code::UPDATE_ERROR        => '更新失败，请重试',
    Code::QUERY_ERROR         => '查询失败，请重试',
    Code::DELETE_ERROR        => '删除失败，请重试',
    Code::RECORD_IS_EXIST     => '记录已存在',
    Code::RECORD_NOT_EXIST    => '记录不存在',
    Code::RECORD_IS_DELETE    => '记录已删除',
    Code::RECORD_IS_UPDATE    => '记录已更新',
    Code::OPERATION_TIMEOUT   => '操作超时，请稍后再试',
    Code::OPERATION_TOO_FAST  => '操作过快，请稍后再试',
    Code::OPERATION_ILLEGAL   => '非法操作',
];