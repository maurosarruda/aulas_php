
<h1>Tabela Foreach</h1>
<!--<table border="1">
    <tr>    
        <th>Nome</th>
        <th>Sobrenome</th>
    </tr>
    <tr>    
        <td>João</td>
        <td>Silva</td>
    </tr>
    <tr>    
        <td>Maria</td>
        <td>Santos</td>
    </tr>
</table>

<table border="1">
<?php
    $tabela = array(
        array("Nome","Sobrenome","Idade"),
        array("João","Silva","18"),
        array("Maria","Santos","23"),
        array("Eduardo","Neves","27"),
    );

    foreach ($tabela as $key => $value) { 
        echo "<tr>";
        if ($key == 0) {
            foreach ($value as $celula){
                echo "<th>".$celula."</th>";
            };
        }else{
            foreach ($tabela[$key] as $celula){
                echo "<td>".$celula."</td>";
            };
        }
        echo "</tr>";
    }
?>
</table>
-->


<table border=”1”>
<?php
	foreach($tabela as $chave => $valor){
        echo("<tr>");
        if($chave == 0){
            foreach($valor as $chave2 => $coluna) {
                echo("<th>$coluna</th>");
            }
        }else{
            foreach($valor as $chave2 => $coluna) {
                echo("<td>$coluna</td>");
	        }
        }
		echo("</tr>");
    }
?>
</table>
