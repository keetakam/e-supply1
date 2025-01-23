<?php
include "connect.php";
$q = sqlsrv_query($conn, "select * from supply");
$output = "";
    
    // $num =0;
    while($row = sqlsrv_fetch_array($q, SQLSRV_FETCH_ASSOC)){
    
        $output .='<tr>
     
        <td>'. $row['category']; '</td>
        </tr>';
    }

$output .= 'NO++a';

echo $output ;
?>



</table>