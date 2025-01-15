<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
}

$uname = validate($_POST['username']);
$pass = validate($_POST['password']);

echo $uname;
echo $pass;

$_SESSION['username'] = $uname;
$_SESSION['password'] = $pass;

echo $_SESSION['username'];


header("Location: index.html" );
    exit();
?>

