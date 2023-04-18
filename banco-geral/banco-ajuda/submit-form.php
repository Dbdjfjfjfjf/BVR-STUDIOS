<?php
if($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $date = $_POST['date'];
  $time = $_POST['hora'];

  // monta o conteúdo que será salvo no arquivo
  $content = "Nome: $name\nE-mail: $email\nData: $date\nHora: $time\nMensagem: $message\n\n<---------Separador--------->\n\n";

  // salva o conteúdo no arquivo
  $file = 'Banco-de-dados-ajuda.txt';
  file_put_contents($file, $content, FILE_APPEND);

  // redireciona para a página de sucesso
  header('Location: success.php');
}
?>
