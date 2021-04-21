
<h1> Matriz </h1>
<?php
$matriz[0][0] = 1;
$matriz[0][1] = 2;
$matriz[1][0] = 3;
$matriz[1][1] = 4;

echo $matriz[1][0];

for($i = 0; $i < 2; $i++){
    for($j = 0; $j < 2; $j++){
        echo $matriz[$i][$j];
        echo "<br>";
    }
}
?>

<?php
$carrosMatriz = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);


for($i = 0; $i < sizeof($carrosMatriz); $i++){
    for($j = 0; $j < sizeof($carrosMatriz[0]); $j++){
        echo $carrosMatriz[$i][$j]."<br>";
    }
}

?>