<?php
$options = ['location'=>'http://localhost/WS-practical-practice/extra-pract1-server.php',
            'uri'=>'http://localhost/WS-practical-practice',];
$client = new SoapClient(NULL,$options);
$principal = 1000; // Principal amount
$rate = 5; // Rate of interest
$time = 3; // Time in years
$result = $client->calculateSimpleInterest($principal, $rate, $time);
echo "The simple interest for principal $principal, rate $rate%, and time $time years is: $result";
?>
<!-- //1.To implement a SOAP web service that returns simple interest based on principal, rate, and time. -->
