<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>View Orders</title>
</head>
<body>
<h1>Bobs Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
 if(file_exists("/var/develop_site_files/orders/orders.txt"))
 echo '<p>There are Orders waiting to be processed.</p>';
 else
 echo '<p>There are currently no orders.</p>';
 @$fp=fopen("/var/develop_site_files/orders/orders.txt",'rb') or die("No Orders Pending");
while(!feof($fp)){
$order_results=fgets($fp);
echo "$order_results</br>";
}
fclose($fp);
unlink("/var/develop_site_files/orders/orders.txt");
?>
</body>
</html>

