<h1>Página de Manipulacao de Formulários</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Tipo Requisição: ".$_SERVER["REQUEST_METHOD"]."<br><br>";
  foreach($_POST as $chave => $valor){
    if(! empty($_POST["$chave"])){
      
      $tipo = gettype($_POST["$chave"]);
      if($tipo == "string"){

        echo "$chave: $valor <br><br>";

      } elseif ($tipo == "array"){

        echo "$chave retornou o array:<br>";
        foreach($valor as $chave_array => $valor_array){
          echo "$chave_array: $valor_array <br>";
        }
        echo "<br>";

      }
    }
  }

} elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
  echo "Tipo Requisição: ".$_SERVER["REQUEST_METHOD"]."<br><br>";
  foreach($_GET as $chave => $valor){
    if(! empty($_GET["$chave"])){
      
      $tipo = gettype($_GET["$chave"]);
      if($tipo == "string"){

        echo "$chave: $valor <br><br>";

      } elseif ($tipo == "array"){

        echo "$chave retornou o array:<br>";
        foreach($valor as $chave_array => $valor_array){
          echo "$chave_array: $valor_array <br>";
        }
        echo "<br>";

      }
    }
  }
}
?>