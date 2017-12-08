<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 2017/12/9
 * Time: 0:45
 */

namespace WxApplet;

use Conf\AppletConf;
use Api\WxAppletApi;
use GuzzleHttp\Client;

/**
 * 微信小程序获取openid的API实现
 * Class OpenId
 * @package WxApplet
 */
class OpenId
{
  public static function getOpenId($js_code)
  {
    $params = [
      'appid' => AppletConf::get('appId'),
      'secret' => AppletConf::get('appSecret'),
      'js_code' => $js_code,
      'grant_type' => 'authorization_code'
    ];
    $client = new Client(['verify' => false]);
    $response = $client->request('GET',WxAppletApi::$jscodeToSession, [
      ['query' => $params]
    ]);
    if ($response->getStatusCode() == 200) {
      $result = $response->getBody();
      $result = json_decode($result, 1);
      return $result;
    } else {
      return false;
    }
  }
}