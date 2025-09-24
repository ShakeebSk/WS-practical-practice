<?php
function gradeServer($marks){
    if($marks>=90){
        return "A+";
    } elseif($marks>=80){
        return "A";
    } elseif($marks>=70){
        return "B+";
    } elseif($marks>=60){
        return "B";
    } elseif($marks>=50){
        return "C";
    } elseif($marks>=40){
        return "D";
    } else{
        return "F";
    }
}

$options = ['uri'=>'http://localhost'];
$server = new SoapServer(NULL, $options);
$server->addFunction("gradeServer");
$server->handle();
?>