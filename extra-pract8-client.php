<?php
$client = new SoapClient(NULL, [
    'location' => 'http://localhost/WS-practical-practice/extra-pract8-server.php',
    'uri'      => 'http://localhost/WS-practical-practice'
]);
print_r($client->getBook(2));

?>