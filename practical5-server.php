<?php
function getTemperature(string $city) : string {
    $cityTemperature = [
        "New York"     => 22,
        "Los Angeles"  => 28,
        "Chicago"      => 18,
        "Houston"      => 30,
        "Phoenix"      => 35
    ];

    // If city is found, return temperature
    if (array_key_exists($city, $cityTemperature)) {
        return (string)$cityTemperature[$city];
    } 
    else {
        // Throw SOAP Fault if city is not found
        throw new SoapFault("Server", "City '$city' not found in database.");
    }
}

$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction("getTemperature");
$server->handle();
?>
