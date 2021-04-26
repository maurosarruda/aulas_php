
<h1>Formulário com Tratamento Request</h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <label for="campoNome">Nome: </label>
  <input type="text" name="campoNome" id="campoNome"><br>

  <label for="campoEmail">Email:</label>
  <input type="email" name="campoEmail" id="campoEmail"><br>

  <label for="meuTextArea">Texto:</label>
  <textarea id="meuTextArea" name="meuTextArea" rows="10" cols="50">Texto..</textarea>

  <input type="submit" value="Envio">
</form>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_REQUEST['campoNome'];
    $email = $_REQUEST['campoEmail'];
    if(empty($nome) or empty($email)){
      echo "Preencha todos os campos!";
    } else {
      echo "Nome: $nome <br>";
      echo "Email: $email";
    }
  }
?>