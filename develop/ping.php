<?php
$server="www.google.com";
echo '<pre>';
$count = 3;
system("/sbin/ping -c $count $server");
system("/sbin/ifconfig");
echo '</pre>';
?>
