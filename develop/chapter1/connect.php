<?php
$db_connect=mysqli_connect("localhost","tonny","password","autoparts");
//Check connection
if(mysqli_connect_errno())
echo 'Database Connection ERROR!!' . mysqli_connect_error();
else
echo 'Database connection successful' . '<br>';

?>

