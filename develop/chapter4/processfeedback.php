<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bob's Auto Parts</title>
<body>
<?php
//Create short variable names
$name=trim($_POST['name']); //Get the data and remove all the newline and carrige returns.
$feedback=trim($_POST['feedback']);
$email=trim($_POST['email']);
$toaddress='ochalytonny@yahoo.com';
$subject='Feedback from Website';
$mailcontent='Customer name: ' . $name . "\n"
. 'Customer email: ' . $email ."\n"
. "Customer comments: \n" . $feedback ."\n";
$fromaddress='From: webserver@compcity.com';
mail($toaddress,$subject,$mailcontent,$fromaddress);

?>
<h1>Feedback Submitted</h1>
<p>Your feedback (shown below)has been sent.</p>
<p><?php echo nl2br($mailcontent)?></p>
</body>
</html>

