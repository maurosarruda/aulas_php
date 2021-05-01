<head>
    <meta charset="UTF-8">
    <title> Formulários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

  <!-- </p><h1 class="bg-danger">Você foi infectado!!</h1><  -->

<body>

<nav class="navbar navbar-light bg-primary">
  <h4 class="navbar">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(! empty($_POST['login'])){
        $login = $_POST['login'];
      }
      echo "Olá $login!!";
    }else{
      echo  "Faça o login!";
    }
  ?>
  </h4>
</nav class="container">

  <form class="m-4 mt-4" action="<?= $_SERVER['PHP_SELF']?>" autocomplete="off" method="POST">
    
    <label for="login">Login: </label>
    <input type="text" name="login" id="login" placeholder="Digite o login" required autofocus><br>

    <label for="senha">Senha: </label>
    <input type="password" name="senha" id="senha" placeholder="Digite a senha" required><br>

    <input class="mt-4 btn btn-primary" type="submit" value="Envio">
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>



