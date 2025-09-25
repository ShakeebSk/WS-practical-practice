<?php
function getBook($id) {
    $books = [
        1 => ['title' => '1984', 'author' => 'George Orwell'],
        2 => ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
        3 => ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
    ];
    return isset($books[$id]) ? $books[$id] : null;
}
$options = ['uri' => 'http://localhost/WS-practical-practice'];
$server = new SoapServer(NULL, $options);
$server->addFunction("getBook");
$server->handle();
?>