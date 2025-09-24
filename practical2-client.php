<?php
$options=[
    'location'=>'http://localhost/WS-practical-practice/practical2-server.php',
    'uri'=>'http://localhost/WS-practical-practice',
    // 'trace'=>1,
    // 'exceptions'=>1
];
try {
    $client=new SoapClient(NULL,$options);
    $amount=100;
    $fromCurrency="USD";
    $toCurrency="EUR";
    $result=$client->convert($amount,$fromCurrency,$toCurrency);
    echo "$amount $fromCurrency is equal to $result $toCurrency";

    //code...
} catch (Exception $e) {
    //throw $th;
    echo "Error: ".$e->getMessage();
}
?>