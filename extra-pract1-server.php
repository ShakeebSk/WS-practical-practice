<?php
function calculateSimpleInterest($principal, $rate, $time) {
    $simpleInterest = ($principal * $rate * $time) / 100;
    return $simpleInterest;
}
$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction("calculateSimpleInterest");
$server->handle();
?>
<!-- //1.To implement a SOAP web service that returns simple interest based on principal, rate, and time. -->

