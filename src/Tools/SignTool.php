<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 22:56
 */

namespace Tools;

use Conf\WxConf;

/**
 * 对结果生成签名
 * 验证签名
 * Class SignTool
 * @package Tools
 */
class SignTool
{
  /**
   * 生成签名字符串
   * @param $params array 待签名的数组
   * @param $key string 商户key
   * @return string sign字符串
   */
  public static function make_sign($params)
  {
    ksort($params);
    $string = http_build_query($params);  //参数进行拼接key=value&k=v
    //签名步骤二：在string后加入KEY
    $string = $string . "&key=" . WxConf::get('mch_key');
    //签名步骤三：MD5加密=>大写
    $result = strtoupper(md5($string));
    return $result;
  }
}