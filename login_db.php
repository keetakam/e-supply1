<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $uname = ($_POST['username']);
    $pass = ($_POST['password']);

}

echo $pass;

$_SESSION['username'] = $uname;
$_SESSION['password'] = $pass;

echo $_SESSION['username'];


header("Location: index.html" );
    exit();
?>

