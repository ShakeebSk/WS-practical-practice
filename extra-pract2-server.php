<?php
function convertCelsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}
$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction("convertCelsiusToFahrenheit");
$server->handle();
?>