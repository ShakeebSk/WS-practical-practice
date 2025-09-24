<!-- <?php
function Factorial($n){
$n = intval($n);
if($n < 0){
    return -1;
} elseif($n ===0 || $n ===1){
    return 1;
} else{
    return $n * Factorial($n - 1);}
}
$options = ['uri'=>'http://localhost'];
$server = new SoapServer(NULL, $options);
$server->addFunction("Factorial");
$server->handle();
?> -->
<!-- <?php
function areaOfRectangle($length,$width){
    return $length * $width;
}
$options = ['uri'=>'http://localhost'];
$server = new SoapServer(NULL, $options);
$server->addFunction("areaOfRectangle");
$server->handle();
?> -->