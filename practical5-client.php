<?php
$options = [
    'location' => 'http://localhost/WS-practical-practice/practical5-server.php',
    'uri'      => 'http://localhost/WS-practical-practice',
];

try {
    $client = new SoapClient(NULL, $options);

    // Example with valid city
    $city = "New York";
    $result = $client->getTemperature($city);
    echo "The temperature in $city is: $result °C<br>";

    // Example with invalid city to trigger SOAP Fault
    $invalidCity = "Mumbai";
    $result = $client->getTemperature($invalidCity);
    echo "The temperature in $invalidCity is: $result °C<br>";

} catch (SoapFault $fault) {
    echo "<b>SOAP Fault occurred:</b><br>";
    echo "Fault Code: {$fault->faultcode}<br>";
    echo "Fault String: {$fault->faultstring}<br>";
}
?>
