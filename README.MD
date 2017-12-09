# 微信小程序/公众号开发 API集成包

> Developer：Jeffrey Wxj   
> Desc：小白一枚，希望看到的大佬不吝赐教

# 使用手册

## 微信小程序

### 实例化对象
```php
$applet = new WxApplet(APP_ID, APP_SECRET);
```

### 获取OpenId/使用jscode获取登陆信息
```php
$res = $applet->appletLogin("003rTMB32gxB2M07T5B32DKAB32rTMB1");
//res
//array(3) { ["session_key"]=> string(24) "xxxxxx" ["expires_in"]=> int(7200) ["openid"]=> string(28) "xxxxxxxxxx" }
```


