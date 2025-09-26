<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$host="localhost";
$user = "root";
$password = "";
$db = "stocks";
$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error) { 
    echo json_encode(["error"=>"Database connection failed"]); 
exit; 
} 
$sql = "SELECT name,value FROM market_rates";
$result = $conn->query($sql);
$rates = [];
while($row = $result->fetch_assoc()) {
    $rates[$row['name']] = $row['value'];
}
echo json_encode($rates);
$conn->close();
?>