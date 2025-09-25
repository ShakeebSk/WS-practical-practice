<?php
function add($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    return $a - $b;
}
function mul($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}
$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction(["add", "sub", "mul", "div"]);
$server->handle();
?>