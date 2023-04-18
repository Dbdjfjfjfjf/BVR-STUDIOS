<?php
// Inclui o arquivo de conexão com o banco de dados
include('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtém os valores dos campos do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $data = $_POST['data'];
  $mensagem = $_POST['mensagem'];

  // Insere os valores no banco de dados
  $sql = "INSERT INTO contatos (nome_completo, email, data, mensagem) VALUES ('$nome', '$email', '$data', '$mensagem')";

  if (mysqli_query($conn, $sql)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem: " . mysqli_error($conn);
  }
}
?>
