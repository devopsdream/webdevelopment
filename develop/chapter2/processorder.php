<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bobs Auto Parts - Order results</title>
</head>

<body>
<h1>Bob's Auto Parts</h1>
<h2>Order results</h2>
<?php
ini_set('display_errors','on');
//error_reporting(E_ALL | E_STRICT);
//Create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
echo '<p>Your Order is as follows:</p>';
echo $_POST['tireqty'] . ' Tires<br/>';
echo $_POST['oilqty'] . ' Oil<br/>';
echo $_POST['sparkqty'] . ' Spark<br/>';
$totalqty=0;
$totalamount=(float)$totalqty; //This is type casting it change a variable to a different  data type .
$test_var=10;
//defining constants
define('TIREPRICE',100);
define('OILPRICE',100);
define('SPARKPRICE',4);
//Work out the totals
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "Items Ordered: $totalqty <br/>";
$totalamount = $tireqty * TIREPRICE
		+ $oilqty * OILPRICE
		+ $sparkqty * SPARKPRICE;
echo 'Subtotal: $' . number_format($totalamount,2). '<br/>';
/*
//Determining the type of variable using gettype() and changing the type using settype()
echo gettype($totalqty).' <br/>';
settype($totalqty,'double');
echo gettype($totalqty).' <br/>';
*/
//testing variable status
if($totalqty == 0 ){
	echo '<font color=red>';
	echo 'You did not order anything from the previous page!<br/>';
	echo '</font>';
}
else{
	echo $tireqty. ' tires<br/>';
	echo $oilqty . ' bottles of oil<br/>';
	echo $sparkqty . ' spark plugs<br/>';
}
//Working with the elseif statement
if($tireqty < 10){
	$discount=0;
}
elseif($tireqty >= 10 && $tireqty <= 49)
	$discount=5;
elseif($tireqty >= 50 && $tireqty <= 99)
	$discount = 10;
elseif($tireqty >= 100)
	$discount =15;
//Working with the switch directive
$find=$_POST['find'];
switch($find)
{
 case 'a':
 echo '<p>Regular Customer</p>';
 break;
 case 'b':
 echo '<p>Customer reffered by TV advert</p>';
 break;
 case 'c':
 echo '<p>Customer refered by Phone directory</p>';
 break;
 case 'd':
 echo '<p>Customer refered by word of mouth</p>';
 default:
 echo '<p>We do not know how this customer found us</p>';
 break;
} 
//Fuck it I will use if statement
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$address = $_POST['ship'];
date_default_timezone_set('America/Chicago');
$date=date('H:i, jS F');
//@$fp=fopen("$DOCUMENT_ROOT/../../../../develop_site_files/orders/orders.txt",'w+') or die("Your order could not be processed at this time please try again later");
@$fp=fopen("/var/develop_site_files/orders/orders.txt",'ab') or die("Your order could not be processed at this time please try again later");
$outputstring=$date. "\t" .$tireqty." tires\t".$oilqty." oil\t"
.$sparkqty." spark plugs\t". $totalamount. "\t". $address ."\n";
fwrite($fp,$outputstring);
fclose($fp);
echo '<p>Order written</p>';
?>
</body>
</html>
