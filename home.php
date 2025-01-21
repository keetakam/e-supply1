
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

  <?php
    $q = "select * from supply ORDER BY 'registID'";
    $result = sqlsrv_query($conn,$q);
  ?>
</head>
<body>
  <?php
    echo $conn;
    echo $q;
  ?> 
 <?php
 if($result === false) {
    trigger_error(print_r(sqlsrv_errors(), true), E_USER_ERROR);
}
?>
    

  <!-- <h1>Image</h1> -->
  <img src="./img/20151102_2254.webp" alt="Logo" width="500" height="200">

 <p>Login good username and password</p> 
 <p>get data into session  UserID from DB is: <?php echo $userId; ?> </P>
 <h1>page home1</h>

  <div class="container">
    <div class="header"><h2 style="color: brown;">ระบบจัดเก็บพัสดุ: กองพัฒนาระบบการเงินภาคประชาชน สศค.</h2></div>
    <div class="menu">
      <h2>Role: <?php echo $role;?> </h2>
      <a href="home.php">สถานะพัสดุ</a><br><a href="home2.php">รายงานพัสดุ</a><br><a href="#">รายงานการตรวจสอบ</a>
      <br>
      <br>
    </div>

    <div class="content"><p>Lorem ipsum odor amet, iquet. Potenti dignissim litora eget mognis ligula lobortis quam ut.</p>
      <form action="home.php" method="POST">
          <select name ="type" id="type">
            <option value ="">ทั้งหมด</option>
            <option value ="1">ว่าง</option>
            <option value ="2">ถูกยืม</option>
            <option value ="3">ส่งซ่อม</option>
            <option value ="4">ส่งคืน</option>
          </select>
          <button type="submit">Submit</button>
      </form>
  <table >
  <tr>
    <th>ลำดับ</th>
    <th>category</th>
    <th>model</th>
    <th>registID</th>
    <th>สถานะพัสดุ</th>
  </tr>
    <?php
      $num = 0;
      while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
      {
      ?>

    <tr>  
        <td><?php echo $num+=1 ;?></td> 
        <td><?php echo $row['category'];?></td>
        <td><?php echo $row['model'];?></td>
        <td><?php echo $row['registID'];?></td>
        <td><?php echo $row['activeState'];?></td>
      </tr>
 <?php
      }
      ?>
</table>

      <?php
      if($_SERVER['REQUEST_METHOD']=='POST'){

        $aa = $_POST['type'];
        echo "you select:" .htmlspecialchars($aa);
      
        $q2 = "select * from supply where activeState = ?";
        $params = array($aa);
        $stmt = sqlsrv_query($conn,$q2,$params);
        
        if($stmt===false){
          die(print_r(sqlsrv_errors(), true));
        }
          if($row2 = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
            echo "user " .htmlspecialchars($row2['activeState']) . "<br>"; 
          }else
           echo "nNo";

      }
      ?>

 
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

