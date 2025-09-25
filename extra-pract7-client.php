<?php
$options = [ 'location'=>'http://localhost/WS-practical-practice/extra-pract7-server.php',
             'uri'=>'http://localhost',];
$client = new SoapClient(NULL,$options);
// $n=10;
print_r($client->fibonacci(10));           
?>