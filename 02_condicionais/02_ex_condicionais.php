<h1>Valor divisivel por 2, 5 e 10</h1>

<?php

$valor = 13;

if ($valor % 2 == 0) {
    echo "O valor é divisivel por 2!<br>";
}
if ($valor % 5 == 0) {
    echo "O valor é divisivel por 5!<br>";
}
if ($valor % 10 == 0) {
    echo "O valor é divisivel por 10!<br>";
}

if ($valor % 2 != 0 && $valor % 5 != 0 && $valor % 10 != 0) {
    echo "O valor não é divisivel por 2, 5 e 10!<br>";
}
?>

<h1>A, B e C em ordem Crescente</h1>

<?php
$a = 3;
$b = 2;
$c = 1;

if ($c > $a) {
    if ($a > $b) {
        echo "A ordem crescente: $b $a $c<br>";
    } else {
        if ($b < $c) {
            echo "A ordem crescente: $a $b $c<br>";
        }
    }
}

if ($a > $b) {
    if ($b > $c) {
        echo "A ordem crescente: $c $b $a<br>";
    } else {
        if ($c < $a) {
            echo "A ordem crescente: $b $c $a<br>";
        }
    }
}

if ($a < $b) {
    if ($c < $a) {
        echo "A ordem crescente: $c $a $b<br>";
    } else {
        if ($c < $b) {
            echo "A ordem crescente: $a $c $b<br>";
        }
    }
}
?>

<h1>Selecao idade e sexo</h1>
<?php
$idade = 18;
$sexo = "F";

if ($idade >= 18 && $sexo == "M") {
    echo "Homem Adulto<br>";
} else if ($idade < 18 && $sexo == "M") {
    echo "Homem Jovem<br>";
} else if ($idade >= 18 && $sexo == "F") {
    echo "Mulher Adulta<br>";
} else if ($idade < 18 && $sexo == "F") {
    echo "Mulher Jovem<br>";
}
?>