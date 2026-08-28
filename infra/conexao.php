<?php

$host = 'localhost';
$user = 'root';
$senha = 'root';
$database = 'crud_ifood';

$conn = new mysqli($host, $user, $senha, $database);

$conn -> set_charset("utf8mb4");

?>