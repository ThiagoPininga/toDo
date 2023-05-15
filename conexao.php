<?php

// $hostname = 'containers-us-west-195.railway.app';
// $usuario = 'root';
// $senha = 'ZzivbuolTlIAoZGWkBHb';
// $database = 'railway';

// $mysqli = new mysqli($hostname, $usuario, $senha, $database);

// //verifica se houver erro
// if ($mysqli -> connect_errno) {
//     echo 'Falha ao conectar: ('.$mysqli->connect_errno . ') ' . $mysqli -> connect_errno;
// }


// Recupera a URL de conexão do banco de dados das variáveis de ambiente
$dbUrl = getenv('DATABASE_URL');

// Extrai as informações do URL
$dbParams = parse_url($dbUrl);

// Cria as variáveis com as informações de conexão
$dbHost = $dbParams['host'];
$dbPort = $dbParams['port'];
$dbUser = $dbParams['user'];
$dbPass = $dbParams['pass'];
$dbName = ltrim($dbParams['path'], '/');

// Cria uma nova conexão com o banco de dados
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort);

// Verifica se ocorreu algum erro na conexão
if ($mysqli->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
}
?>