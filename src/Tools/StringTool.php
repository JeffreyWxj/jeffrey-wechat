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
  public static function randString()
  {
    return md5(microtime().rand().rand().rand().rand().rand());
  }
}