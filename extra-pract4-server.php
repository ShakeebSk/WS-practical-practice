<?php
function todayDateTime(){
    return date("Y-m-d H:i:s");
}
$options = ['uri'=>'http://localhost'];
$server = new SoapServer(NULL, $options);
$server->addFunction("todayDateTime");
$server->handle();
?>