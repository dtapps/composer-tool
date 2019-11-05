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
     * @param array $data
     * @param string $msg
     * @param int $code
     */
    public static function json_success(array $data = [], string $msg = 'success', int $code = 0)
    {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode(['code' => $code, 'msg' => $msg, 'data' => $data]));
    }

    /**
     * 返回Json-错误
     * @param string $msg
     * @param int $code
     */
    public static function json_error(string $msg = 'error', int $code = 1)
    {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode(['code' => $code, 'msg' => $msg]));
    }

    /**
     * 返回Json-错误
     * @param int $code
     * @param string $msg
     */
    public static function json_error_code(int $code = 1, string $msg = '')
    {
        header('Content-Type:application/json; charset=utf-8');
        try {
            $data[1] = ['msg' => empty($msg) ? 'error' : $msg];
            $data[102] = ['msg' => empty($msg) ? '参数不足' : $msg];
            $data[601] = ['msg' => empty($msg) ? $msg : '数据不存在'];
            array_push($data, ['code' => $code]);
            exit(json_encode($data[$code]));
        } catch (\Exception $e) {
            $data = ['code' => -1, 'msg' => '未定义错误状态'];
            exit(json_encode($data));
        }
    }
}
