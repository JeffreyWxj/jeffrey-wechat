<?php
/**
 * 微信支付核心类
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/8
 * Time: 20:20
 */

namespace WxPay;

class WxPay
{
  private $appId;
  private $appSecret;
  private $mchId;
  private $mchKey;
  private $certFilePath;
  private $keyFilePath;
  
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
  
  public function setMchId($mchId)
  {
    $this->mchId = $mchId;
  }
  
  public function getMchId()
  {
    return $this->mchId;
  }
  
  public function setMchKey($mchKey)
  {
    $this->mchKey = $mchKey;
  }
  
  public function getMchKey()
  {
    return $this->mchKey;
  }
  
  public function setCertFilePath($certFilePath)
  {
    $this->certFilePath = $certFilePath;
  }
  
  public function getCertFilePath()
  {
    return $this->certFilePath;
  }
  
  public function setKeyFilePath($keyFilePath)
  {
    $this->keyFilePath = $keyFilePath;
  }
  
  public function getKeyFilePath()
  {
    return $this->keyFilePath;
  }
  
  /**
   * 自动化的配置方法
   * @param null $config
   * @return array|bool
   */
  public function config($config = null)
  {
    $auto_config = ['appId', 'appSecret', 'mchId', 'mchKey', 'certFilePath', 'keyFilePath'];
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
   * 生成预支付订单
   */
  public function unifiedOrder()
  {
    
  }
}