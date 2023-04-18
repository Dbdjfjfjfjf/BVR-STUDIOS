<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "banco2";

// Cria a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica se houve algum erro na conexão
if (!$conn) {
  die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
