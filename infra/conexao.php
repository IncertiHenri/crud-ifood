<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$database = 'crud_ifood';
$port = 3308;

$conn = new mysqli($host, $user, $senha, $database, $port);

$conn -> set_charset("utf8mb4");

?>