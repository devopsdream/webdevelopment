<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Freight Charges</title>
</head>

<body>
<table>
 <tr bgcolor="CCCCCC">
  <td>Distance</td>
  <td>Cost</td>
 </tr>
 <?php
 $distance=50;
 while($distance <= 1000){
  echo '<tr>'. '<td>'. $distance .'</td>' . '<td>'. $distance/10 .'</td>' . '</tr>';
  $distance = $distance + 50;
  }
  ?>
</table>
</body>
</html>

