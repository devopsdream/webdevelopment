<?php
date_default_timezone_set("America/Chicago");
$hour = date('G');
if($hour < 12){
	echo "Good morning";
}
if ($hour >= 12 and $hour < 17) {
	echo "Good afternoon";
}
if ($hour >= 17 and $hour < 20 ) {
	echo "Good evenning";
}
echo "<br>";
$file = $_SERVER['SERVER_SOFTWARE'];
echo $file;
$user_agent = $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $user_agent;
echo "<br>";
$stringlen = strlen('hope');
echo $stringlen;
echo "<br>";
$time = date('c');
echo $time;
?>