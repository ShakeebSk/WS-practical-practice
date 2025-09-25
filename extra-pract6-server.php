<?php
function getEmployees($id){
    $employees = [
        1 => ['name' => 'Alice', 'position' => 'Developer'],
        2 => ['name' => 'Bob', 'position' => 'Designer'],
        3 => ['name' => 'Charlie', 'position' => 'Manager'],
    ];
    return isset($employees[$id]) ? $employees[$id] : null;
}
$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction("getEmployees");
$server->handle();
?>