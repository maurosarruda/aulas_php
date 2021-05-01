
<h1>Expressoes Regulares - Delimitadores, Padroes e Modificadores</h1>
<?php
  echo "Expressão Regular <br>";

  $frase = "Laranja, Banana, limão, etc";
  $exp = "/ba(na){2}/i";

  if(preg_match($exp, $frase) == 1){
    echo "O padrão foi encontrado!";
  }
  // echo preg_match($exp, $frase);
?> 

<?php
  $cep = "11317-999";
  echo $cep."<br>";
  $exp = '/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/';
  echo preg_match($exp, $cep);
?>


<!--
<h1>Exemplo Funções para Expressões Regulares</h1>

<?php
$string = "Olá sou estudante do IFMS da cidade de Campo Grande";
$padrao = "/ifms/i";
echo preg_match($padrao, $string);
?> 

<?php
$string = "Olá sou estudante do IFMS da cidade de Campo Grande";
$padrao = "/da/i";
echo preg_match_all($padrao, $string);
?>

<?php
$string = "Olá sou estudante do IFMS da cidade de Campo Grande";
$padrao = "/olá/i";
$troca = "Oi";
echo preg_replace($padrao, $troca, $string);
?> 
-->

<!--
<h1>Exemplo de Validação com Expressão Regular</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="campoNome">
  Idade: <input type="text" name="campoIdade">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_REQUEST['campoNome'];
  $idade = $_REQUEST['campoIdade'];
  if (empty($nome) or empty($idade)) {
    echo "Preencha todos os campos.";
  } else {
      if(!preg_match("/\d/",$idade)){
          echo "A idade deve ser composta por digitos.";
      }else{
        echo "Nome: ";
        echo $nome;
        echo "<br> Idade: ";
        echo $idade;
      }
  }
}
?>
-->

<!-- 
<h1>Exemplos Úteis de Expressões Regulares</h1>
<?php
$email = "teste@dominio.com.br";
if(!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)){
echo "E-mail inválido.";    
}else{
echo "Seu e-mail é ".$email."<br>";
}
?>

<?php
$cep = "55324-424";
if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
  echo "CEP inválido.";
}else{
    echo $cep."<br>";
}
?>

<?php
$data = "04/02/2011";
if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
    echo "Data inválida.";
}else{
    echo $data."<br>";
}
?>

<?php
$telefone = "(82) 975555-5555";
$exp = '^\(+[0-9]{2,3}\) [9]{1,1}[0-9]{4}-[0-9]{4}$^';

echo preg_match($exp, $telefone);

if(!preg_match($exp, $telefone)){
  echo "invalido";
}else {
  echo $telefone."<br>";
}
?>

<?php
$cpf = "111.444.777-35";
if(!preg_match('^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$^', $cpf)) {
echo "CPF inválido.";
} else{
    echo $cpf."<br>";
}
?> 
-->


