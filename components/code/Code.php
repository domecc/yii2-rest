<?php
/**
 * 错误码
 *
 * @filename   Code.php UTF-8
 * @author     wubang<domewubang@gmail.com>
 * @license    这不是一个自由软件，未经授权不许任何使用和传播
 * @version    1.0
 * @date       2018-12-14 9:54
 */

namespace app\components\code;

class Code implements CodeHttp
{
    // 系统错误
    const NO_ERROR            = 0; // 成功
    const SYSTEM_ERROR        = -1; // 十分抱歉，系统错误，请联系客服
    const ERROR_CODE_ERROR    = -2; // 十分抱歉，错误码不存在，请联系客服
    const APP_DISABLE         = 1001; // 应用不可用
    const APP_IS_EXIST        = 1002; // 应用已存在
    const APP_NOT_EXIST       = 1003; // 应用不存在
    const APP_IS_RUNNING      = 1004; // 应用运行中
    const APP_IS_AUTH         = 1005; // 应用已授权
    const APP_NOT_AUTH        = 1006; // 应用未授权
    const AUTH_SUCCESS        = 1007; // 认证成功
    const AUTH_FAILED         = 1008; // 认证失败
    const SIGN_ERROR          = 1009; // 签名错误
    const KEY_ERROR           = 1010; // key 错误
    const SECRET_ERROR        = 1011; // secret 错误
    const ENCODE_ERROR        = 1012; // 加密失败
    const DECODE_ERROR        = 1013; // 解密失败
    const ENCODE_DATA_ILLEGAL = 1014; // 非法加解密数据
    const PARAMS_ERROR        = 1015; // 参数错误
    const PARAMS_ILLEGAL      = 1016; // 参数非法
    const PARAMS_MISSING      = 1017; // 参数缺失，请检查
    const PARAMS_INVALID      = 1018; // 无效参数，请检查
    const SYSTEM_BUSY         = 1019; // 系统繁忙，请稍后
    const SYSTEM_UPGRADE      = 1020; // 系统升级，请稍后
    const VERIFY_ERROR        = 1021; // 验证错误，请重试
    const FORMAT_ERROR        = 1022; // 格式错误，请重试
    const CREATE_ERROR        = 1023; // 创建失败，请重试
    const UPDATE_ERROR        = 1024; // 更新失败，请重试
    const QUERY_ERROR         = 1025; // 查询失败，请重试
    const DELETE_ERROR        = 1026; // 删除失败，请重试
    const RECORD_IS_EXIST     = 1027; // 记录已存在
    const RECORD_NOT_EXIST    = 1028; // 记录不存在
    const RECORD_IS_DELETE    = 1029; // 记录已删除
    const RECORD_IS_UPDATE    = 1030; // 记录已更新
    const OPERATION_TIMEOUT   = 1031; // 操作超时，请稍后再试
    const OPERATION_TOO_FAST  = 1032; // 操作过快，请稍后再试
    const OPERATION_ILLEGAL   = 1033; // 非法操作

    // 用户
}
