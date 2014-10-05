<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bookshop CRM</title>
</head>
<body>
<form method=post>
<table border="1" style="width:300px">
 <tr>
   <td>ISBN</td>
   <td>AUTHOR</td>
   <td>TITLE</td>
   <td>PRICE</td>
</tr>
<tr>
   <td><input type="text" name="isbn"></td>
   <td><input type="text" name="author"></td>
   <td><input type="text" name="title"></td>
   <td><input type="text" name="price"></td>
</tr>
</table>
   <input type="submit" value="submit">
</form>
<?php
 $isbn=trim($_POST['isbn']);
 $author=trim($_POST['author']);
 $title=trim($_POST['title']);
 $price=trim($_POST['price']);
$server="127.0.0.1";
$username="tonny";
$password="password";
$database="books";
$db_connect=mysqli_connect("$server","$username","$password","$database")or die("connection failed". mysqli_connect_error());
$insert="INSERT INTO books VALUES ($isbn,'$author','$title',$price)";
if(!mysqli_query($db_connect,$insert)){
 die('Error:' . mysqli_error($db_connect));
}else
 echo "1 record added";
mysqli_close($db_connect);
?>
</body>
</html>

