<?php
//Open the file
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Bobs Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h1>Customer Orders</h1>
<?php
//Another cleaner way of reading this file
$orders=file("$DOCUMENT_ROOT/../orders/orders.txt");
$number_of_orders=count($orders);
if($number_of_orders == 0)
{
	echo '<p><strong>No Orders Pending Please try again later</strong></p>';
}
echo "<table border=1>\n";
echo '<tr><th bgcolor="#CCCCFF">Order Date</th>
	<th bgcolor="#CCCCFF">Tires</th>
	<th bgcolor="#CCCCFF">Oil</th>
	<th bgcolor="#CCCCFF">Spark Plugs</th>
	<th bgcolor="#CCCCFF">Head lamps</th>
	<th bgcolor="#CCCCFF">Total Amount</th>
	<th bgcolor="#CCCCFF">Address</th>
     </tr>';
for($i=0;$i<$number_of_orders;$i++)
{
	$line=explode("\t", $orders[$i]);
	$line[1]=intval($line[1]);
	$line[2]=intval($line[2]);
	$line[3]=intval($line[3]);
	$line[4]=intval($line[4]);
	//echo $orders[$i]. '</br>';
	echo "<tr><td>$line[0]</td>
		<td align='right'>$line[1]</td>
		<td align='right'>$line[2]</td>
		<td align='right'>$line[3]</td>
		<td align='right'>$line[4]</td>
		<td align='right'>$line[5]</td>
		<td align='right'>$line[6]</td>
	     </tr>";
}
echo "</table>";
for($i=0;$i<$number_of_orders;$i++)


?>
</body>
</html>
