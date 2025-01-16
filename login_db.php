<?php
include("connect.php");

session_start();
if(isset($_GET['username']) && isset($_GET['password'])){
    // function validate($data){
    //     $data = trim($data);
    //     $data = stripcslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;

     echo 'get data from login'; 
    //  echo $Username. $Password;
}

$User = $_GET['username'];
$Pass = $_GET['password'];


echo "data User is $User";
echo "data password is $Pass";

echo "Your can see this message therefore  YourUser or password is not True "

?>

<?php
    $q = "select * from users where username = '$User' AND password = '$Pass' ";
    $result = sqlsrv_query($conn,$q);
?>


<?php 
    $num = 0;
    while($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC))
    {
?>
        <br>
        <?php echo $num+=1; ?>
        username
        <?php echo $row['username']; ?>
        <br>
        password
        <?php echo $row['password']; ?>
        <br>
        role
        <?php echo $row['role'];?>

        
   <?php      
       header("Location: index.html" );
       exit();
    }
    // header("Location: index.html" );
    // exit();
    ?>