<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Multi Dimensional Arrays</title>
</head>

<body>
<?php
$products=array(array('Code'=>TIR,'Decription'=>Tires,'Price'=>100),
array('Code'=>OIL,'Decription'=>Oil,'Price'=>10),
array('Code'=>SPK,'Decription'=>'Spark Plugs','Price'=>4)
);
//print_r($products[0]);
$count=count($products);
for($count=0;$count<3;$count++){
 foreach($products[$count] as $code=>$description){
	echo "$code\t$description<br>";}
}
//Sorting arrays
ksort($products);
?>
</body>
</html>

