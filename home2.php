<<<<<<< HEAD:index.html
@@ -1,3 +1,4 @@

=======

<?php
session_start();
    if(!isset($_SESSION['userID'])){
        header('location: index.php');
        exit();
    }

    $userId = $_SESSION['userID'];
    $role = $_SESSION['role'];
 
?>
>>>>>>> c0a0fe6810b1e28990e85040409ae712c8c42830:home2.php
<!DOCTYPE html>
<html lang="en">
<head>
@@ -11,25 +12,19 @@
<!-- <h1>Image</h1> -->
<img src="./img/20151102_2254.webp" alt="Logo" width="500" height="200">

<<<<<<< HEAD:index.html

  <p>You can see this therefore login is "OK"</p>
<div class="container">
<div class="header"><h2 style="color: brown;">ระบบจัดเก็บพัสดุ: กองพัฒนาระบบการเงินภาคประชาชน สศค.</h2></div>

<div class="menu">
<h2>ADMIN: admin1 </h2>
      <?php
        <h1>echo $_SESSION['username'];
      ?></h1>
        <h1><?php echo $_SESSION['$username'];?></h1>
<a href="#">สถานะพัสดุ</a><br><a href="#">รายงานพัสดุ</a><br><a href="#">รายงานการตรวจสอบ</a>
<br>
<br>
</div>
  }

  




<div class="content"><h3>Lorem Ipsum</h3><p>Lorem ipsum odor amet, consectetuer adipiscing elit. Ridiculus sit nisl laoreet facilisis aliquet. Potenti dignissim litora eget montes rhoncus sapien neque urna. Cursus libero sapien integer magnis ligula lobortis quam ut.</p></div>

<div class="menu2"><h2>Support</h2>
=======
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

>>>>>>> c0a0fe6810b1e28990e85040409ae712c8c42830:home2.php
