<?php
$options = ['location'  => 'http://localhost/WS-practical-practice/extra-pract6-server.php',
            'uri'       => 'http://localhost/WS-practical-practice',];
$client = new SoapClient(NULL,$options);
// $id = 2;
// $result = $client->getEmployees($id);
// if ($result) {
//     echo "Employee ID: $id\n";
//     echo "Name: " . $result['name'] . "\n";
//     echo "Position: " . $result['position'] . "\n";
// } else {
//     echo "Employee with ID $id not found.\n";
// }
// print_r($client->getEmployees(1));
print_r($client->getEmployees(2));
?>