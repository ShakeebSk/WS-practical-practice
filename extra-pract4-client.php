<?php
$options = [ 'location'=>'http://localhost/WS-practical-practice/extra-pract4-server.php',
             'uri'=>'http://localhost/WS-practical-practice',];

             $client = new SoapClient(NULL,$options);
                $result = $client->todayDateTime();
                echo "Current Date and Time: $result";
?>