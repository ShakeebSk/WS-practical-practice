<?php 
try{ 
$options = [ 
'location' => 'http://localhost/WS-practical-practice/practical6-server.php', 
'uri'=>'http://localhost/WS-practical-practice', 
'trace'=>1, 
]; 
 
$client=new SoapClient(null,$options); 
$city='Mumbai'; 
$city='NewYork'; 
$city='London'; 
$city='Tokyo'; 
$result=$client->getTemperature($city); 
echo nl2br(htmlspecialchars($result)); 
//echo"Response from SOAP Services $result\n\n"; 
 
}catch(SoapFault $e){ 
echo "SOAP Error: ".htmlspecialchars($e->getMessage()); 
} 
?>