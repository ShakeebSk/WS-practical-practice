<?php
$response = file_get_contents('http://localhost/WS-practical-practice/Rest-Practs/Pract3-api.php');
$data = json_decode($response, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Live Stick Market data</h2>
    <ul>
        <li><strong>NSE Index: </strong>RS<?php echo $data['NSE']?></li>
        <li><strong>BSE Index: </strong>RS<?php echo $data['BSE']?></li>
        <li><strong>GOld Index: </strong>RS<?php echo $data['GOLD']?></li>

    </ul>
    



</body>
</html>

