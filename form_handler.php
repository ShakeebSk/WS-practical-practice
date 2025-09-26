<?php 
if($_SERVER["REQUEST_METHOD"]==="POST"){ 
$city = trim($_POST['city']); 
 
if(empty($city)){ 
echo 'Please Enter the City Name'; 
exit; 
} 
$options = [ 
'location' => 'http://localhost/WS-practical-practice/temp-server.php', 
'uri'=>'http://localhost/WS-practical-practice', 
]; 
 
try{ 
$client=new SoapClient(null,$options); 
$result=$client->getTemperature($city); 
}catch(Exception $e){ 
return "NONE"; 
} 
}else{ 
return "Invalid"; 
} 
 
?> 
 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial- 
scale=1.0"> 
<link rel="stylesheet" href="styling.css"> 
<title>Wheather Result</title> 
</head> 
<body> 
<h2>Temperature Result</h2> 
<p><strong>City:</strong><?=htmlspecialchars($city ??'')?></p> 
<p><strong>Result:</strong><br> 
<?=nl2br(htmlspecialchars($result))?> 
</p> 
<a href="index.html">check another city</a> 
</body> 
</html>