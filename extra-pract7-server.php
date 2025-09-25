<?php
function fibonacci($n){
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return array_slice($fib, 0, $n);
    // Alternatively, a recursive approach (less efficient):
    // $n - intval($n);
    // if($n <= 0) return 0;
    // if($n == 1) return 1;
    // return fibonacci($n-1) + fibonacci($n-2);
}
$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction("fibonacci");
$server->handle();
?>