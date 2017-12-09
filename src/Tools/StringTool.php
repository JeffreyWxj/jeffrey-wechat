<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 23:17
 */

namespace Tools;

/**
 * 字符串相关处理函数
 * Class StringTool
 * @package Tools
 */
class StringTool
{
  /**
   * 生成随机字符串
   * @return string
   */
  public static function randString()
  {
    return md5(microtime() . rand() . rand() . rand() . rand() . rand());
  }
  
  /**
   * 生成/自动获取终端IP
   * @return string
   */
  public static function getTerminalIp()
  {
    $ip = trim($_SERVER['REMOTE_ADDR']);
    if (!$ip) {
      $ip = '192.168.1.1';
    }
    return $ip;
  }
}