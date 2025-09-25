<?php
$options = [
    'location' => 'http://localhost/WS-practical-practice/extra-pract3-server.php',
    'uri'      => 'http://localhost/WS-practical-practice'
];

$client = new SoapClient(NULL, $options);

// Call all operations
echo "Addition Result: " . $client->add(10, 5) . "<br>\n";
echo "Subtraction Result: " . $client->sub(10, 5) . "<br>\n";
echo "Multiplication Result: " . $client->mul(10, 5) . "<br>\n";
echo "Division Result: " . $client->div(10, 5) . "<br>\n";
echo "Division by Zero Result: " . $client->div(10, 0) . "<br>\n";
?>
