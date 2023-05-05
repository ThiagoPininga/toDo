<?php
include("conexao.php");

$id = $_GET['id'];

$mysqli->query("DELETE FROM itens WHERE idItem = '$id'") or die($mysqli->error);
header("Location: index.php");
?>