<h>The time and date is: </h>
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
	$json =  file_get_contents('http://ip-api.com/json/'.$ip);
	$ipData = json_decode($json,true);
	$tz = date_default_timezone_set($ipData['timezone']);
	echo $runningTime = date("l\, jS \of F\, Y h:i:s A, e \( T \) , P \U\T\C");
?>