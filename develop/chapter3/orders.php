<?php
 $orders=file("/var/develop_site_files/orders/orders.txt");
$number_of_orders=count($orders);
if($number_of_orders==0)
{
 echo '<p><strong>No Orders Pending Please try again later.</strong></p>';
}
