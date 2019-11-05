# composer-tool
常用工具

## 安装
```
composer require liguangchun/tool
```

## 更新
```
composer update liguangchun/tool
```

## 删除
```
composer remove liguangchun/tool
```

## 搜索
```
composer search liguangchun/tool
```

## 使用

### 小程序加密解密交互数据
```
use liguangchun\tool\MiniProgramAes;

class Index
{
    public function index()
    {
        // 配置key和iv
        $aes = new MiniProgramAes('7324564123567898', '7324564173265898');
        // 加密 自动识别是array还是字符串
        var_dump($aes->encrypt('1111'));
        // 解密
        var_dump($aes->decrypt('J42UtufU8075QPbq0%2FQIqA%3D%3D'));
    }
}
```

### 返回Json
```
use liguangchun\tool\Ret;

class Index
{
    public function index()
    {
        // 返回成功Json
        Ret::jsonSuccess(['id'=>1]);

        // 返回错误Json
        Ret::jsonError('错误描述', 1);
    }
}
```

### 判断请求
```
use liguangchun\tool\Req;

class Index
{
    public function index()
    {
        // 判断输入的参数 有空值就返回false 下面示例是使用TP框架
        Req::isEmpty(Request::only($arr, 'get'),['id']);

        // 判断输入的参数 有空值就输出Json错误 下面示例是使用TP框架
        Req::isEmptyRet(Request::only($arr, 'get'),['id']);

        // 判断请求是否为GET  true 是 ； false 否
        Ret::isGet();

        // 判断请求是否为GET  true 是 ； false 否
        Ret::isPost();
    }
}
```
