<?php

class TrafficModuleUpdater
{
  public static function update()
  {
    $api = API_URL . '/flow_info?flow_token='.TOKEN ;
    $json = json_decode(file_get_contents($api), true);

    $ip = $json['subnets'];
    $str = '<?php' . PHP_EOL .'$ip = ' . var_export($ip, true) . '; return $ip;';
    file_put_contents(IP_FILE, $str);

    unset($json['subnets']);
    $str = '<?php' . PHP_EOL .'$flow = ' . var_export($json, true) . '; return $flow;';
    file_put_contents(FLOW_FILE, $str);
  }
}
