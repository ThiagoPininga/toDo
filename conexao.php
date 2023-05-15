<?php

$hostname = 'containers-us-west-195.railway.app';
$usuario = 'root';
$senha = 'ZzivbuolTlIAoZGWkBHb';
$database = 'railway';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

//verifica se houver erro
if ($mysqli -> connect_errno) {
    echo 'Falha ao conectar: ('.$mysqli->connect_errno . ') ' . $mysqli -> connect_errno;
}
?> 