<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 0:50
 */

namespace Conf;

/**
 * 微信小程序全局配置
 * 单例模式
 * Class AppletConf
 * @package Conf
 */
class AppletConf
{
  private static $appId;
  private static $appSecret;
  
  //阻止直接实例化
  private function __construct()
  {
  }
  
  //不允许复制
  private function __clone()
  {
    trigger_error('Clone is not allow');
  }
  
  public static function config($appId, $appSecret)
  {
    static::$appId = $appId;
    static::$appSecret = $appSecret;
  }
  
  public static function get($configName = null)
  {
    if ($configName === null) {
      return [
        'appId' => static::$appId,
        'appSecret' => static::$appSecret,
      ];
    } else {
      return static::$$configName;
    }
  }
}