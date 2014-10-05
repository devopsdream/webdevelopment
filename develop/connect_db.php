<?php
//Connect to the database
$server="127.0.0.1";
$username="tonny";
//phpinfo();
//$connect=mysql_connect("localhost","nyla","password","books")or die("Connection to database failed");
$connect=mysqli_connect("$server","$username","password") or die("This connection failed");
$sql = "create database my_db;";
if(mysqli_query($connect,$sql)){
 echo "Database my_db created successfully!";
}else{
 echo "Database creation failed" . mysqli_error($connect);
}
?>
