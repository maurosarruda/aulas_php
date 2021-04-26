<h1>Página de Manipulacao de Formulários</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Tipo Requisição:".$_SERVER["REQUEST_METHOD"]."<br>";
  $nome = $_POST['campoNome'];
  $placa = $_POST['campoPlaca'];
  if (! empty($nome)){
    echo "Nome: $nome <br>";
  } 
  if (! empty($placa)){
    echo "<br>Placa: $placa";
  } 
} elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
  echo "Tipo Requisição:".$_SERVER["REQUEST_METHOD"]."<br>";
  $nome = $_GET['campoNome'];
  $placa = $_GET['campoPlaca'];
  if (! empty($nome)){
    echo "Nome: $nome <br>";
  } 
  if (! empty($placa)){
    echo "Placa: $placa";
  } 
}
?>