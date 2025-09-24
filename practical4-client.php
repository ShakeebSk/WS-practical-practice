<?php
$options = [ 'location'=>'http://localhost/WS-practical-practice/practical4-server.php',
             'uri'=>'http://localhost/WS-practical-practice',];
$client = new SoapClient(NULL,$options);
// $marks = [85, 90, 78, 92, 88];
// foreach($marks as $marks){
//     $result = $client->gradeServer($marks);
//     echo "The grade for marks $marks is: $result\n";
// }
$marks = 85;
$result = $client->gradeServer($marks);
echo "The grade for marks $marks is: $result\n";
?>