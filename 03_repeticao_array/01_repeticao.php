
<h1> Estruturas de Repetição - While </h1>
<?php
$contador = 1;
while($contador <= 12){
    if($contador == 6){
        continue;
    }
    echo "Mês $contador <br>";
    $contador = $contador + 1;
}
?>

<h1> Estruturas de Repetição - Do..While </h1>
<?php
$contador = 10;
do{
    echo "Contador: $contador <br>";
    $contador = $contador - 1;
}while($contador > 0);
?>


<h1> Estruturas de Repetição - For </h1>
<?php
echo "Números Pares até 20:<br>";
for($valor = 0; $valor <= 20; $valor= $valor + 2){
    echo "$valor <br>";
}
?>
