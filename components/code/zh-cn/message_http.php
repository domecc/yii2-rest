<?php

use app\components\code\Code;

return [
    // 2* 成功
    Code::HTTP_OK                            => '请求成功',
    Code::HTTP_CREATED                       => '已创建',
    Code::HTTP_ACCEPTED                      => '已接受',
    Code::HTTP_NON_AUTH_INFO                 => '非授权信息',
    Code::HTTP_NO_CONTENT                    => '无内容',
    Code::HTTP_RESET_CONTENT                 => '重置内容',
    Code::HTTP_PARTIAL_CONTENT               => '部分内容',

    // 3* 重定向
    Code::HTTP_MULTI_CHOICES                 => '多种选择',
    Code::HTTP_MOVED_PERMANENTLY             => '永久移动',
    Code::HTTP_FOUND                         => '临时移动',
    Code::HTTP_SEE_OTHER                     => '查看其它地址',
    Code::HTTP_NOT_MODIFIED                  => '未修改',
    Code::HTTP_USE_PROXY                     => '使用代理',
    Code::HTTP_UNUSED                        => '已经被废弃的HTTP状态码',
    Code::HTTP_TEMPORARY_REDIRECT            => '临时重定向',

    // 4* 客户端错误
    Code::HTTP_BAD_REQUEST                   => '请求错误',
    Code::HTTP_UNAUTHORIZED                  => '用户未认证',
    Code::HTTP_PAYMENT_REQUIRED              => '保留，将来使用',
    Code::HTTP_FORBIDDEN                     => '请求拒绝执行',
    Code::HTTP_NOT_FOUND                     => '资源不存在',
    Code::HTTP_METHOD_NOT_ALLOWED            => '方法被禁止',
    Code::HTTP_NOT_ACCEPTABLE                => '内容特性无法请求',
    Code::HTTP_PROXY_AUTH_REQUIRED           => '代理身份未认证',
    Code::HTTP_TIME_OUT                      => '请求时间过长',
    Code::HTTP_CONFLICT                      => '请求时发生了冲突',
    Code::HTTP_GONE                          => '资源不存在',
    Code::HTTP_LENGTH_REQUIRED               => 'Content-Length错误',
    Code::HTTP_PRECONDITION_FAILED           => '请求信息的先决条件错误',
    Code::HTTP_REQUEST_TOO_LARGE             => '请求的实体过大',
    Code::HTTP_URL_TOO_LARGE                 => '请求的URI过长',
    Code::HTTP_UNSUPPORTED_MEDIA_TYPE        => '服务器无法处理请求附带的媒体格式',
    Code::HTTP_REQUEST_RANGE_NOT_SATISFIABLE => '客户端请求的范围无效',
    Code::HTTP_EXPECT_FAILED                 => '服务器无法满足Expect的请求头信息',

    // 5* 服务器错误
    Code::HTTP_SERVER_ERROR                  => '服务器内部错误',
    Code::HTTP_NOT_IMPLEMENTED               => '服务器不支持请求的功能',
    Code::HTTP_BAD_GATEWAY                   => '无效的响应',
    Code::HTTP_SERVICE_UNAVAILABLE           => '服务器超载或系统维护',
    Code::HTTP_GATEWAY_TIME_OUT              => '服务器请求超时',
    Code::HTTP_VERSION_NOT_SUPPORTED         => '服务器不支持',
];
