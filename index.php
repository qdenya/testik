
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-itunes-app" content="app-id=313877526">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<?
function check_mobile_device() { 
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
    // var_dump($agent);exit;
    foreach ($mobile_agent_array as $value) {    
        if (strpos($agent, $value) !== false) return $value;   
    }       
    return false; 
}
$agent = check_mobile_device();
if($agent == "ipad" || $agent == "iphone" || $agent == "ipod")  {
  echo '
<div class="apps">
  <a class="ubtn-normal" href="yandexmaps://build_route_on_map?lat_to=55.638215&amp;lon_to=27.027924">
    <button class="postr">
      <img src="img/yk1.png" class="links_logo">
      <span>Яндекс</span>
    </button>
  </a>
  <a class="ubtn-normal" href="http://maps.google.com/maps?&daddr=55.638215,27.027924">
    <button class="postr">
      <img src="img/gk.jpg" class="links_logo">
      <span>Google</span>
    </button>
  </a>
    <a class="ubtn-normal" href="maps://?daddr=55.638215,27.027924">
      <button class="postr">
        <img src="img/ak.png" class="links_logo">
        <span>Apple</span>
      </button>
    </a>
</div>';
}  else if($agent == "android")  {
  echo '
<div class="android_btn">
  <a class="android" href="geo:54.833323840327964,37.46271079267866">
    <button class="android_button">
      <span>Построить маршрут</span>
    </button>
  </a>
</div>';
} else {
echo '
<div class="desktop_btn">
  <a class="android" href="http://maps.google.com/maps?&daddr=55.638215,27.027924">
    <button class="android_button">
      <span>Построить маршрут</span>
    </button>
  </a>
</div>';
}
?>

</body>
</html>