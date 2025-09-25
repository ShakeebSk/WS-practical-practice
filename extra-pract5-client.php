<?php
$options = [
    'location' => 'http://localhost/WS-practical-practice/extra-pract5-server.php', // server file location
    'uri'      => 'http://localhost/WS-practical-practice'  // namespace
];

// Create client
$client = new SoapClient(NULL, $options);

// Call the remote function
$result = $client->sayHello("Shakeeb");

// Display result
echo "Response from SOAP Server: " . $result;
?>
