<?php
	$name = $_POST["name"];
	$error = array( "error" => "We dont want this");
	header('Content-Type: application/json');
	echo (json_encode($error));
?>