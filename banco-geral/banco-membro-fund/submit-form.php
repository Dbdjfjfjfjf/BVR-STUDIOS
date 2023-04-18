<?php
if($_POST) {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $message = $_POST['message'];

  // monta o conteúdo que será salvo no arquivo
  $content = "Nome: $name\nData: $date\nMensagem: $message\n\n<---------Separador--------->\n\n";

  // salva o conteúdo no arquivo
  $file = 'comentario.txt';
  file_put_contents($file, $content, FILE_APPEND);

  // redireciona para a página de sucesso
  header('Location: success.php');
}
?>
