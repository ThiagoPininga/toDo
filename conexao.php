<?php
$hostname = 'aws.connect.psdb.cloud';
$usuario = 'gh99poep9v5zbykumqnb';
$senha = 'pscale_pw_WplVoDJcKskOuKMnTKzvPc2Oj6aAWDZaskdKUY9kZM2';
$database = 'todo';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

//verifica se houver erro
if ($mysqli -> connect_errno) {
    echo 'Falha ao conectar: ('.$mysqli->connect_errno . ') ' . $mysqli -> connect_errno;
}
?>