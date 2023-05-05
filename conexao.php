<?php
$hostname = 'aws.connect.psdb.cloud';
$usuario = 'jz3m6t6mxpkrc0lnah2a';
$senha = 'pscale_pw_5EKsV46BYllAwanuzgzCQSZXal6WcNQqfvquvsZxuJy';
$database = 'todo';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

//verifica se houver erro
if ($mysqli -> connect_errno) {
    echo 'Falha ao conectar: ('.$mysqli->connect_errno . ') ' . $mysqli -> connect_errno;
}
?>