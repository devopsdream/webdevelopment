<!doctype html>
<html>
<head>
<title>Results</title>
</head>
<body>
	<p>Firstname:</p><p><?php echo $_POST['firstname'];?></p>
	<p>LastName:</p><p><?php echo $_POST['lastname'];?></p>
	<p>Gender:</p><p><?php echo $_POST['gender'];?></p>
	<p>Comments</p><p><?php $message=$_POST['comments'];
	 echo $message;
	?></p>
	<p>Age:</p><p><?php echo $_POST['age']?></p>
	<?php
	 echo $_REQUEST['comments'];
	?>
</body>
</html>