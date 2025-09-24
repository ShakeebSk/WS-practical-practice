<?php
function getTemperature($city) {
    $cityTemperature = [
        "New York" => 22,
        "Los Angeles" => 28,
        "Chicago" => 18,
        "Houston" => 30,
        "Phoenix" => 35
    ];

    if(array_key_exists($city, $cityTemperature)) {
        return $cityTemperature[$city];
    } else {
        return "City not found";
    }
}
$options = ['uri'=>'http://localhost'];
$server = new SoapServer(NULL, $options);
$server->addFunction("getTemperature");
$server->handle();
?>