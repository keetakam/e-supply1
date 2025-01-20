
<?php
session_start();
    if(!isset($_SESSION['userID'])){
        header('location: index.php');
        exit();
    }
    $userId = $_SESSION['userID'];
    $role = $_SESSION['role'];
?>
<?php
include('connect.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Supply</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
 
  <!-- <h1>Image</h1> -->
  <img src="./img/20151102_2254.webp" alt="Logo" width="500" height="200">

 <p>Login good username and password</p> 
 <p>get data into session  UserID from DB is: <?php echo $userId; ?> </P>
 <h1>page home2</h>
  <div class="container">
    <div class="header"><h2 style="color: brown;">ระบบจัดเก็บพัสดุ: กองพัฒนาระบบการเงินภาคประชาชน สศค.</h2></div>
    <div class="menu">
      <h2>Role: <?php echo $role;?> </h2>
      <a href="home.php">สถานะพัสดุ</a><br><a href="home2.php">รายงานพัสดุ</a><br><a href="#">รายงานการตรวจสอบ</a>
      <br>
      <br>
    </div>

    <div class="content"><p>Lorem ipsum odor amet, iquet. Potenti dignissim litora eget mognis ligula lobortis quam ut.</p>
      <h2> content: ที่สามารถยืมได้</h2>
    </div>
    

    <div class="menu2"><h2>Support</h2>
    <a href="#">คู่มือการใช้งาน</a><br>
    <a href="#">แก้ไขข้อมูล</a>
    <br>
    <a href="logout.php">logout</a>
    </div>


  </div>
  <p>พัฒนาโดย: ฝ่ายสาระสนเทศ:กองพัฒนาระบบการเงินภาคประชาชน สศค.</p>
  </body>
</html>

