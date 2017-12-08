<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 0:28
 */

namespace Api;

/**
 * 微信支付API列表
 * Class WxPayApi
 * @package Api
 */
class WxPayApi
{
  /**
   * 统一下单接口
   * @var string
   */
  static $unifiedOrder = "https://api.mch.weixin.qq.com/pay/unifiedorder";
  
  /**
   * 查询订单接口
   * @var string
   */
  static $orderQuery = "https://api.mch.weixin.qq.com/pay/orderquery";
  /**
   * 关闭订单
   * @var string
   */
  static $closeOrder = "https://api.mch.weixin.qq.com/pay/closeorder";
  
  /**
   * 申请退款
   * @var string
   */
  static $refund = "https://api.mch.weixin.qq.com/secapi/pay/refund";
  
  /**
   * 查询退款
   * @var string
   */
  static $refundQuery = "https://api.mch.weixin.qq.com/pay/refundquery";
  
  /**
   * 下载对账单
   * @var string
   */
  static $downloadBill = "https://api.mch.weixin.qq.com/pay/downloadbill";
  
  /**
   * 拉取订单评价数据
   * @var string
   */
  static $batchQueryComment = "https://api.mch.weixin.qq.com/billcommentsp/batchquerycomment";
}