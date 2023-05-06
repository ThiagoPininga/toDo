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

$HOST="aws.connect.psdb.cloud";
$USERNAME="a2307nrjr2w8ir4e6av4";
$PASSWORD="pscale_pw_riR51gdEUBYgFNwHiaeCeOW7GsabcsehBIlatcjEDwt";
$DATABASE="todo";

  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($servername, $username, $password, 'todo');
  $mysqli->close();

// Checando a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem-sucedida";

?>