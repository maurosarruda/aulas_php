

<h1>Comentarios, Variáveis e Impressões</h1>

<?php
// Comentario
# Comentario
/*
Comentario
em varias linhas 
*/

$idade = 30; // Integer String
$nome = "João"; // String
$saldo = 1000.90; //double
$logico = true; //boolean

echo gettype($nome)."<br>";

echo 'a', 'b', 'c', '<br>';
printf("Frase impressa!<br>");


$nome = "Mauro";

echo $nome."<br>";
var_dump($nome);
?>

<h1> Variáveis dentro de variáveis </h1>
<?php
    $cidade = "Campo Grande";
    $estado = "MS";
    $idade = 116;

    $frase_capital = "A cidade de $cidade é a capital do estado de $estado!";
    $frase_idade = "A cidade de $cidade tem $idade anos!";
    echo "<h4> $frase_capital </h4>";
    echo "<h4> $frase_idade </h4>";
?>

<h1>Constantes</h1>
<?php
    define("PI", 3.1415);
    // PI = 10; //Erro
    echo PI, "<BR>";
    
    define("MARCA_CARROS", ["TOYOTA", "FIAT"]);
    // MARCA_CARROS[1] = "TESTE"; //Erro
    echo MARCA_CARROS[1];
?>