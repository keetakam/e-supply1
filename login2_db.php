<?php
session_start();
include 'connect.php'; // เชื่อมต่อฐานข้อมูล

// ตรวจสอบข้อมูลจากฟอร์ม
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // สร้างคำสั่ง SQL เพื่อค้นหาผู้ใช้
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = sqlsrv_prepare($conn, $sql, array(&$username));

    if (sqlsrv_execute($stmt)) {
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        if ($row) {
            // ตรวจสอบรหัสผ่าน
            if (password_verify($password, $row['password'])) {
                // เก็บข้อมูลผู้ใช้ใน session
                $_SESSION['user_id'] = $row['userID'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                
                // เปลี่ยนหน้าไปที่หน้า welcome
                header('Location: welcome.php');
                exit;
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that username.";
        }
    } else {
        echo "Error in SQL execution.";
    }

    sqlsrv_free_stmt($stmt);
}

sqlsrv_close($conn);
?>
