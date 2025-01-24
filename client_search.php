
<?php
include "connect.php";

echo "bbb";

$searchTerm = $_POST['searchTerm'];

$q = sqlsrv_query($conn,"select * from supply
    where( category LIKE '%{$searchTerm}%' OR
            brand LIKE '%{'$searchTerm}%' )");


$output = "";
 while($row = sqlsrv_fetch_array($q, SQLSRV_FETCH_ASSOC )){
        $output .= '<tr>
        <td>'.$row['category'].'</td>
        <td>'.$row['model'].'</td>
        </tr>';
    }
}
    echo $output;

?>
