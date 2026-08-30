<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$telefone = $_POST["fone"];
$endereco = $_POST["end"];
$categoria = $_POST["cat"];

$sql = "INSERT INTO restaurantes (nome,categoria,telefone,endereco) VALUES(?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss",$nome,$categoria,$telefone,$endereco);

$stmt->execute();

header("location:../index.php");
exit;

?>