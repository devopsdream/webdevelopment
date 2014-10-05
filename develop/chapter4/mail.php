<?php
$toaddress='ochalytonny@yahoo.com';
$subject='test-php-mail';
$mailcontent='<p>This is a test message from php server</p>';
mail($toaddress,$subject,$mailcontent);
?>
