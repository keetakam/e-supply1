
<?php
session_start();
    if(!isset($_SESSION['userID'])){
        header('location: index.php');
        exit();
    }

    $userId = $_SESSION['userID'];
    $role = $_SESSION['role'];
 
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
 <p>get data into session  UserID from DB is: <?php echo $userId; ?></p>
 <h1>Page home2</h1>
  <div class="container">


    <div class="header"><h2 style="color: brown;">ระบบจัดเก็บพัสดุ: กองพัฒนาระบบการเงินภาคประชาชน สศค.</h2></div>

    <div class="menu">
      <h2>Role: <?php echo $role;?> </h2>
      <a href="home.php">สถานะพัสดุ</a><br><a href="home2">รายงานพัสดุ</a><br><a href="#">รายงานการตรวจสอบ</a>
      <br>
      <br>
    </div>

    <div class="content"><h3>Lorem Ipsum</h3><p>Lorem ipsum odor amet, consectetuer adipiscing elit. Ridiculus sit nisl laoreet facilisis aliquet. Potenti dignissim litora eget montes rhoncus sapien neque urna. Cursus libero sapien integer magnis ligula lobortis quam ut.</p></div>
    
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

