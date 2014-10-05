<?php
$pictures=array('brake_pad.jpg','gasket.jgp.jpg','spark_plug.jpg','thermostat.jpg', 'tire.jpg'
,'door.jpg','oil.jpg','steering_wheel.jpg','wiper_blade.jpg'
);
shuffle($pictures);
?>
<html>
<head>
	<title>Bobs Auto Parts</title>
</head>
<body>
 <center>
	<h1>Bobs Auto Parts</h1>
	<table>
	 <tr>
		<?php
		  for($i=0;$i<3;$i++){
			echo '<td align="center"><img src="images/';
			echo $pictures[$i];
			echo '" width="100" height="100"></td>';
			}
		?>
	</tr>
	</table>
 </center>
</body>
</html>
