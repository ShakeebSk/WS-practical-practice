<?php
$apiurl = "http://localhost:3000/time";
$response = file_get_contents($apiurl);
$data = json_decode($response, true);
echo "Current Time: " . $data['time'];
?>