<?php

// database: todo
// username: iah213n2bjce2ldp12ph
// host: aws.connect.psdb.cloud
// password: pscale_pw_5VhgSNA6g4Uuw5kaSrBkX6oouTapsusMfbksN3AkR5T

// $hostname = 'aws.connect.psdb.cloud';
// $usuario = 'cohnnln8du69baxqpuq3';
// $senha = 'pscale_pw_3RwVrjshyRFTTEuKCglbQopvNYBQIznPw1QnNJkdqjh';
// $database = 'todo';

// $mysqli = new mysqli($hostname, $usuario, $senha, $database);

// //verifica se houver erro
// if ($mysqli -> connect_errno) {
//     echo 'Falha ao conectar: ('.$mysqli->connect_errno . ') ' . $mysqli -> connect_errno;
// }

$servername = "aws.connect.psdb.cloud";
$username = "cohnnln8du69baxqpuq3";
$password = "pscale_pw_3RwVrjshyRFTTEuKCglbQopvNYBQIznPw1QnNJkdqjh";
$dbname = "todo";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checando a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>