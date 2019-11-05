<?php
/**
 * Created by : PhpStorm
 * Date: 2019/11/5
 * Time: 16:15
 * User: 李光春 gc@dtapp.net
 */

require_once './vendor/autoload.php';


// aes加密、解密
$aes = new \liguangchun\tool\MiniProgramAes('7324564123765898', '7324564123765898');
// 加密 自动识别是array还是字符串
var_dump($aes->encrypt('1111'));
// 解密
var_dump($aes->decrypt('J42UtufU8075QPbq0%2FQIqA%3D%3D'));
