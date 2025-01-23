
<?php
include "connect.php";

echo "bbb";

$searchTerm = $_POST['searchTerm'];

$q = sqlsrv_query($conn,"select * from supply
    where( category LIKE '%{$searchTerm}%' OR
            brand LIKE '%{'$searchTrem}%' 
    )");


$output = "";
if(sqlsrv_num_rows($q) >0){
    while($row = SQLSRV_FETCH_ASSOC($q)){
        $output .= '<tr>
        <td>'.$row['registID'].'</td>
        <td>'.$row['registID'].'</td>
        </tr>';
    }
}else{
    $output .='No Client Are';
}
    echo $output;

?>