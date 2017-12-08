<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 0:41
 */

namespace Api;


class WxAppletApi
{
  /**
   * 小程序jscode换取session和openid的接口
   * @var string
   */
  static $jscodeToSession = "https://api.weixin.qq.com/sns/jscode2session";
}