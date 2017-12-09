<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/10
 * Time: 0:21
 */

namespace WxPay;


use Tools\StringTool;

class UnifiedOrder
{
  private $appId;
  private $mchId;
  private $nonce_str;
  private $sign_type;
  private $body;
  private $detail;
  private $out_trade_no;
  private $total_fee;
  private $spbill_create_ip;
  private $notify_url;
  private $trade_type;
  private $openid;
  
  public function __construct()
  {
    //生成随机字符串
    $this->nonce_str = StringTool::randString();
    //终端IP
    $this->spbill_create_ip = StringTool::getTerminalIp();
    //设置加密方式
    $this->sign_type = 'MD5';
  }
  
  
  /**
   * @return mixed
   */
  public function getBody()
  {
    return $this->body;
  }
  
  /**
   * @param mixed $body
   */
  public function setBody($body)
  {
    $this->body = $body;
  }
  
  /**
   * @return mixed
   */
  public function getDetail()
  {
    return $this->detail;
  }
  
  /**
   * @param mixed $detail
   */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  
  /**
   * @return mixed
   */
  public function getOpenid()
  {
    return $this->openid;
  }
  
  /**
   * @param mixed $openid
   */
  public function setOpenid($openid)
  {
    $this->openid = $openid;
  }
  
  /**
   * @return mixed
   */
  public function getOutTradeNo()
  {
    return $this->out_trade_no;
  }
  
  /**
   * @param mixed $out_trade_no
   */
  public function setOutTradeNo($out_trade_no)
  {
    $this->out_trade_no = $out_trade_no;
  }
  
  /**
   * @return mixed
   */
  public function getTotalFee()
  {
    return $this->total_fee / 100;
  }
  
  /**
   * @param mixed $total_fee
   */
  public function setTotalFee($total_fee)
  {
    $this->total_fee = $total_fee * 100;
  }
  
  /**
   * @return string
   */
  public function getSpbillCreateIp(): string
  {
    return $this->spbill_create_ip;
  }
  
  /**
   * @param string $spbill_create_ip
   */
  public function setSpbillCreateIp(string $spbill_create_ip)
  {
    $this->spbill_create_ip = $spbill_create_ip;
  }
  
  /**
   * @return mixed
   */
  public function getNotifyUrl()
  {
    return $this->notify_url;
  }
  
  /**
   * @param mixed $notify_url
   */
  public function setNotifyUrl($notify_url)
  {
    $this->notify_url = $notify_url;
  }
  
  /**
   * @return mixed
   */
  public function getTradeType()
  {
    return $this->trade_type;
  }
  
  /**
   * @param mixed $trade_type
   */
  public function setTradeType($trade_type)
  {
    $this->trade_type = $trade_type;
  }
  
  /**
   * @return string
   */
  public function getSignType(): string
  {
    return $this->sign_type;
  }
  
  /**
   * @param string $sign_type
   */
  public function setSignType(string $sign_type)
  {
    $this->sign_type = $sign_type;
  }
  
  /**
   * @return mixed
   */
  public function getAppId()
  {
    return $this->appId;
  }
  
  /**
   * @param mixed $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  
  /**
   * @return mixed
   */
  public function getMchId()
  {
    return $this->mchId;
  }
  
  /**
   * @param mixed $mchId
   */
  public function setMchId($mchId)
  {
    $this->mchId = $mchId;
  }
  
}