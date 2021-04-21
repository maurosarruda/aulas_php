<h1> Arrays </h1>
<?php
$vetor[0] = 10;
$vetor[1] = 50;
$vetor[2] = 4;

$carros = array("Volvo", "BMW", "Toyota");

echo $vetor[0];
echo "<br>";
echo $carros[2];
?>

<h1> Arrays Associativos </h1>
<?php
$vetorPessoa["nome"] = "João";
$vetorPessoa["idade"] = 30;

$idade = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo $vetorPessoa["nome"];
echo $idade["Ben"];

$vetor[] = "time";
$vetor[] = 10;

for($i=0; $i < count($vetor); $i++){
    echo "$vetor[$i] <br>";
}

echo sizeof($vetor);
echo count($carros);
?>
