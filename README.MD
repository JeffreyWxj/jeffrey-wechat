# 微信小程序开发 API集成包

> Developer：Jeffrey Wxj   
> Desc：小白一枚，希望看到的大佬不吝赐教

# 使用手册

## 安装
```
composer require jeffrey/jeffrey-wechat
```

## 微信小程序

### 实例化对象
```php
$applet = new WxApplet(APP_ID, APP_SECRET);
```

### 获取OpenId/使用jscode获取登陆信息
```php
$res = $applet->appletLogin("your_js_code");
//res
//array(3) { ["session_key"]=> string(24) "xxxxxx" ["expires_in"]=> int(7200) ["openid"]=> string(28) "xxxxxxxxxx" }
```

## 微信支付

### 实例化微信支付对象
```php
use WxPay\WxPay;

$wxPay = new WxPay();
$wxPay->config([
  'appId' => APP_ID,
  'appSecret' => APP_SECRET,
  'mchId' => MCH_ID,
  'mchKey' => MCH_KEY,
  'certFilePath' => CERT_PATH,
  'keyFilePath' => KEY_PATH
]);
```

### 统一下单接口
```php
use Tools\StringTool;

$unifiedOrder = $wxPay->newUnifiedOrder();
$unifiedOrder->setBody('Body');
$unifiedOrder->setDetail('Detail');
$unifiedOrder->setNotifyUrl('');
$unifiedOrder->setOpenid(MY_OPENID);
$unifiedOrder->setOutTradeNo(StringTool::randString());
$unifiedOrder->setTotalFee(0.01);//设置人民币（元）即可，自动转换单位为分
```

