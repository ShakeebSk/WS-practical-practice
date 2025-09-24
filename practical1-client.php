<?php
$options = [
    'location' => 'http://localhost/WS-practical-practice/practical1-server.php',
    'uri' => 'http://localhost/WS-practical-practice',
    'trace' => 1,
    'exceptions' => 1
];
$client = new SoapClient(NULL, $options);
$city  = "New York";
$result = $client->getTemperature($city);
echo "The temperature in $city is: $result °C";
echo "\n";
echo htmlentities($client->__getLastRequest());//this line is extra and is only for 1b aka 2nd pract
echo "\n";
echo htmlentities($client->__getLastResponse());
?>
