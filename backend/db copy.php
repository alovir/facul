<?php
//Parametros para conexão ao banco de dados

//Nome do servidor
$servername = "localhost";

//Nome de usuario
$username = "root";

//Senha de acesso
$password = "";

//Nome do banco de dados
$db_name = 'esp';

// cria a conexão 
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Testa a conexão  
if (!$conn) {
  die("Connection falhou: " . mysqli_connect_error());
}


function dbQuery($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	return $result;
}

function dbFetchAssoc($result) {
	return mysqli_fetch_assoc($result);
}

