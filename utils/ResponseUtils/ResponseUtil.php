<?php
/**
 * 返回码工具
 *
 * @file    CodeUtils.php
 * @author  wubang
 * @date    2019/5/7 10:21
 * @version 1.0
 * Create by wubang <domewubang@gmail.com>
 */

namespace app\utils\ResponseUtils;

use yii\web\Response;

class ResponseUtil
{
    /**
     * 不带data的格式
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/7/29 22:40
     * @param $code
     * @return array|false|string
     */
    public static function responseByCode($code)
    {
        $header         = \Yii::$app->response;
        $format         = self::getFormat();
        $header->format = $format;
        $result         = self::handleOutputResultByCode($code);
        if ($format == Response::FORMAT_HTML) {
            return json_encode($result, true);
        } elseif ($format == Response::FORMAT_JSONP) {
            return 'jsonp(' . json_encode($result, true) . ')';
        } else {
            return $result;
        }
    }

    /**
     * 带data的格式
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/7/29 22:03
     * @param $code
     * @param $data
     * @return mixed
     */
    public static function responseByCodeAndData($code, $data)
    {
        $header         = \Yii::$app->response;
        $format         = self::getFormat();
        $header->format = $format;
        $result         = self::handleOutputResultByCode($code);
        $result         = array_merge($result, ['data' => $data]);
        if ($format == Response::FORMAT_HTML) {
            return json_encode($result, true);
        } elseif ($format == Response::FORMAT_JSONP) {
            return 'jsonp(' . json_encode($result, true) . ')';
        } else {
            return $result;
        }
    }

    /**
     * 获取支持的格式
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/7/29 22:32
     * @return mixed|string
     */
    private static function getFormat()
    {
        $formats = [
            Response::FORMAT_XML,
            Response::FORMAT_HTML,
            Response::FORMAT_JSON,
            Response::FORMAT_JSONP,
        ];
        $format  = \Yii::$app->request->headers['format'];
        if (empty($format)) {
            $format = \Yii::$app->request->get('format');
        }
        $exist = in_array($format, $formats);
        return $exist ? $format : Response::FORMAT_JSON;
    }

    /**
     * 处理输出结果
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/5/7 11:42
     * @param $code
     * @return array
     */
    private static function handleOutputResultByCode($code)
    {
        return [
            'code'    => (int)$code,
            'message' => (string)\Yii::t('message', $code),
        ];
    }
}
