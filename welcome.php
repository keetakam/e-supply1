<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // ถ้าไม่มี session ให้กลับไปที่หน้า login
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
