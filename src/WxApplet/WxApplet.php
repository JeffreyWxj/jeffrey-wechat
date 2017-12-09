<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 0:45
 */

namespace WxApplet;

use Api\WxAppletApi;
use GuzzleHttp\Client;

/**
 * 微信小程序
 * 常用WebAPI封装
 * Class OpenId
 * @package WxApplet
 */
class WxApplet
{
  private $appId;
  private $appSecret;
  
  public function __construct($appId, $appSecret)
  {
    $this->appId = $appId;
    $this->appSecret = $appSecret;
  }
  
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  
  public function getAppId()
  {
    return $this->appId;
  }
  
  public function setAppSecret($appSecret)
  {
    $this->appSecret = $appSecret;
  }
  
  public function getAppSecret()
  {
    return $this->appSecret;
  }
  
  /**
   * 自动化的配置方法
   * @param null $config
   * @return array|bool
   */
  public function config($config = null)
  {
    $auto_config = ['appId', 'appSecret'];
    if ($config === null) {
      $result = [];
      //取出所有的配置信息
      foreach ($auto_config as $conf_name) {
        if (isset($this->$conf_name)) {
          $result[$conf_name] = $this->$conf_name;
        }
      }
      return $result;
    } else if (is_array($config)) {
      // 传入数组自动赋值
      foreach ($auto_config as $conf_name) {
        if (array_key_exists($conf_name, $config)) {
          $this->$conf_name = $config[$conf_name];
        }
      }
    } else if (is_string($config)) {
      //取出配置的值
      if (in_array($config, $auto_config)) {
        return $this->$config;
      }
    } else {
      return false;
    }
  }
  
  
  /**
   * 使用小程序端获取到的js_code换取openid和session_key
   * @param $js_code
   * @return bool|mixed|\Psr\Http\Message\StreamInterface
   */
  public function appletLogin($js_code)
  {
    $params = [
      'appid' => $this->appId,
      'secret' => $this->appSecret,
      'js_code' => $js_code,
      'grant_type' => 'authorization_code'
    ];
    $client = new Client(['verify' => false]);
    $response = $client->request('GET', WxAppletApi::$jscodeToSession, [
      'query' => $params
    ]);
    if ($response->getStatusCode() == 200) {
      $result = $response->getBody();
      $result = json_decode($result, 1);
      return $result;
    } else {
      return false;
    }
  }
  
  /**
   * appletLogin的别名
   * 获取openid
   * @param $js_code
   * @return bool|mixed|\Psr\Http\Message\StreamInterface
   */
  public function getOpenId($js_code)
  {
    return $this->appletLogin($js_code);
  }
}