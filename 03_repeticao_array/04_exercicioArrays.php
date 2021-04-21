<!-- Percorra o vetor e divida em valores pares e valores impares 
e crie dois vetores -->
<?php
  //Cria e apresenta vetor de entrada
  $vet = [5, 6, 7, 8, 9, 10];

  echo "<br>Vetor de Entrada:<br>";
  for($i = 0; $i < sizeof($vet); $i++){
    echo $vet[$i]."<br>";
  }

  //Separa valores em novos vetores
  $j = 0;
  $k = 0;
  for($i = 0; $i < sizeof($vet); $i++){
    if($vet[$i] % 2 == 0){
      $vetPares[$j++] = $vet[$i];
    }else{
      $vetImpares[$k++] = $vet[$i];
    }
  }

  //Apresenta vetores criados
  echo "<br>Vetor de Pares:<br>";
  for($i = 0; $i < sizeof($vetPares); $i++){
    echo $vetPares[$i]."<br>";
  }

  echo "<br>Vetor de Impares:<br>";
  for($i = 0; $i < sizeof($vetImpares); $i++){
    echo $vetImpares[$i]."<br>";
  }
?> 

<!-- Percorra o vetor e separe os valores maiores que 0, 
em seguida encontre o maior e menor elemento.--> 
<?php
  //Cria e apresenta vetor de entrada
  $vet = [-1,-2,3,4,5,6,7,-8,10,-10];

  echo "<br>Vetor de Entrada:<br>";
  for($i = 0; $i < sizeof($vet); $i++){
    echo $vet[$i]."<br>";
  }

  //Separa valores maiores que 0
  $j = 0;
  for($i = 0; $i < sizeof($vet); $i++){
    if($vet[$i] > 0){
      $vetPositivo[$j++] = $vet[$i];
    }
  }

  //Encontra Maior e Menor
  for($i = 0; $i < sizeof($vetPositivo); $i++){
    if($i == 0){
      $maior = $menor = $vetPositivo[$i];
    }else{
      if($vetPositivo[$i] > $maior){
        $maior = $vetPositivo[$i];
      }
      if($vetPositivo[$i] < $menor){
        $menor = $vetPositivo[$i];
      }
    }
  }

   //Apresenta vetores de positivo e Maior e Menor elemento
   echo "<br>Vetor de Positivo:<br>";
   for($i = 0; $i < sizeof($vetPositivo); $i++){
     echo $vetPositivo[$i]."<br>";
   }

   echo "O maior elemento é $maior!<br>";
   echo "O menor elemento é $menor!<br>";
?> 

