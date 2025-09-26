<?php
header('Content-Type: application/json');
$username = htmlspecialchars($_GET['username']);
$response = ['message' => "Welcome, $username!" ];
echo json_encode($response);
?>