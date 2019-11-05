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

### 返回Json
```
use liguangchun\notice\Ret;

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
use liguangchun\notice\Req;

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
