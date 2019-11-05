<?php
/**
 * Created by : PhpStorm
 * Date: 2019/11/5
 * Time: 10:17
 * User: 李光春 gc@dtapp.net
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
    public static function json_error_code(int $code = 1, string $msg = 'error')
    {
        header('Content-Type:application/json; charset=utf-8');
        $data[1] = ['msg' => $msg];
        $data[102] = ['msg' => '参数不足'];
        $data[601] = ['msg' => '数据不存在'];
        array_push($data, ['code' => $code]);
        exit(json_encode($data));
    }
}
