<?php
// phpinfo();

$serverName = 'localhost';
$databaseName= 'fpo_supply';
$userName = 'sa';
$password = 'p@ss';

//connection option


$connectionOption = array(
    "Database" => $databaseName,
    "UID" =>$userName,
    "PWD" =>$password,
    "MultipleActiveResultSets"=>true,
    "TrustServerCertificate" =>true,
    // "CharacterSet" =>"UTF-8"
);

// estiblish connection
$conn = sqlsrv_connect($serverName,$connectionOption);


if($conn == false){
   die( print_r(sqlsrv_errors(),true));
    
    echo 'fail';
}
else{
    echo "connect DB";
}
?>

