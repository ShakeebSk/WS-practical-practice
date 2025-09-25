<?php
// Define a simple function
function sayHello($name) {
    return "Hello, " . $name . "!";
}

// Options for SOAP server
$options = ['uri' => 'http://localhost/WS-practical-practice'];

// Create SOAP server (no WSDL)
$server = new SoapServer(NULL, $options);

// Register the function
$server->addFunction("sayHello");

// Handle requests
$server->handle();
?>
