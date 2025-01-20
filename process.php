<?php
include('connect.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $option = $_POST['option'];

    $q = "select * from supply where activeState = ? ORDER BY 'registID' " ;
    $params = array($option);

    $stmt = sqlsrv_prepare($conn, $q, $params); 

  
      $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

      if($result){
        echo "<h2> Results </h2>";
        echo "ID: " . $result['registID'];
      }else{
        echo "xxxx";
      }
    } 
      else{
        echo "error";
      }
sqlsrv_close($conn);
?>