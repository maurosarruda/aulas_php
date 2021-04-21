
<table width="400px" height="50px" border="1">
    <tr>
        <td bgcolor="#000000"></td>
        <td bgcolor="#FFFFFF"></td>
        <td bgcolor="#000000"></td>
        <td bgcolor="#FFFFFF"></td>
    </tr>
</table>

<?
echo '<table width="400px" height="400px" border="1">';
for($j = 1; $j <= 8; $j++){
  echo '<tr>';
    if(($j % 2) == 0){
        for($i = 1; $i <= 8; $i++){
            if(($i % 2) == 0){
                echo '<td  bgcolor="#000000"></td>';
            }else{
                echo '<td  bgcolor="#FFFFFF"></td>';
            }
        }
    }else{
        for($i = 1; $i <= 8; $i++){
            if(($i % 2) == 0){
                echo '<td  bgcolor="#FFFFFF"></td>';
            }else{
                echo '<td  bgcolor="#000000"></td>';
            }
        }
    }
  echo '</tr>';
}
echo '</table>';
?>
