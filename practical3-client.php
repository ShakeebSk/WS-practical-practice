// For Factorial function
<!-- <?php
$options = [ 'location'=>'http://localhost/WS-practical-practice/practical3-server.php',
             'uri'=>'http://localhost/WS-practical-practice',];
$client = new SoapClient(NULL,$options);
$number = 5;
$result = $client->Factorial($number);
echo "The factorial of $number is: $result";
?> -->

//For area of rectangle
<?php
$options = [ 'location'=>'http://localhost/WS-practical-practice/practical3-server.php',
             'uri'=>'http://localhost/WS-practical-practice',];
$client = new SoapClient(NULL,$options);
$length = 10;
$width = 5;
$result = $client->areaOfRectangle($length,$width);
echo "The area of rectangle with length $length and width $width is: $result";
?>