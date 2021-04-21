<h1> Estruturas Condicionais </h1>
<?php
$idade = 16;

if ($idade < 18){
    echo "Usuário com $idade anos é menor de idade!";
} else if ($idade == 18){
    echo "Usuário possui $idade anos!";
} else {
    echo "Usuário com $idade anos é um adulto!";
}
?>

<h1> Operadores Lógicos </h1>

<?php
$idade = 15;
if ($idade >= 18 && $idade < 60){
    echo "Pessoa na fase adulta!<br>";
}

$cidade = "Campo Grande";
if ($cidade == "Campo Grande" || $cidade == "Dourados"){
    echo "Cidade do MS!<br>";
}

if ($idade >= 18 xor $cidade == "Campo Grande"){
    echo "Menor campo-grandense ou Adulto de outra cidade!<br>";
} 

$status = false;
if (!$status){
    echo "Negação!<br>";
}

?>

<h1>Switch</h1>
<?php

// switch ($variable) {
//     case 'value':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }

// if ($numero == 0){

// } else if ($numero == 1){

// } else if ($numero == 2){
    
// } else if ($numero == 3){
    
// } else {

// }

$numero = 5;

switch ($numero) {
    case '1':
        echo "caso 1";
        break;

    case '2':
        echo "caso 2";
        break;
     
    case '3':
        echo "caso 3";
        break;
         
    default:
        echo "Default";
        break;
}

?>


<h1>Operador Ternário</h1>

<?php 
// if (condicao){
//     //executar se for verdadeiro
//     expressao1;
// } else {
//     //executar se for falso
//     expressao2;
// }

// condicao ? expressao1 : expressao2;

    $frequencia = 0.6;
    $nota = 5;

    // echo "A nota inicial é: $nota <br>";
    // echo "A frequencia é: $frequencia <br>";

    $nota = ($frequencia >= 0.75) ? ($nota + 2) : ($nota - 2);

    echo "A nota inicial é: $nota <br>";

// //Implementação na estrutura IF/ELSE
// if ($frequencia >= 0.75){
//     $nota = $nota + 2;
// } else {
//     $nota = $nota - 2;
// }

?>