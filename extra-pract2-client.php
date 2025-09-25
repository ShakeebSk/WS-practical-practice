<?php
$options = [ 'location'=>'http://localhost/WS-practical-practice/extra-pract2-server.php',
             'uri'=>'http://localhost/WS-practical-practice',];
$client = new SoapClient(NULL,$options);
$celsius = 25;
$result = $client->convertCelsiusToFahrenheit($celsius);
echo "$celsius Celsius is equal to $result Fahrenheit";
?>