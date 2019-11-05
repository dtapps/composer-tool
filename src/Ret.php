<?php
/**
 * Created by : PhpStorm
 * Date: 2019/11/5
 * Time: 10:17
 * User: 李光春 gc@dtapp.net
 */

namespace liguangchun\tool;

/**
 * 返回
 * Class Ret
 * @package liguangchun\tool
 */
class Ret
{
    /**
     * 返回Json-成功
     * @param array $data 数据
     * @param string $msg 描述
     * @param int $code 状态am
     */
    public static function json_success(array $data = [], string $msg = 'success', int $code = 0)
    {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode(['code' => $code, 'msg' => $msg, 'data' => $data]));
    }

    /**
     * 返回Json-错误
     * @param string $msg 描述
     * @param int $code 状态码
     */
    public static function json_error(string $msg = 'error', int $code = 1)
    {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode(['code' => $code, 'msg' => $msg]));
    }
}
