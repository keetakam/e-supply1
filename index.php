
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

    <div class="login">
        <h1>Login</h1>
        <form action="login_db.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="username" id="username" required>
            <input type="text" name="password" placeholder="password" id="password" required>
            <input type="submit" value="login"> 
        </form>

        <p>check status session:</p>
        
    </div>
    <?php
    session_start();
    if(session_status() == PHP_SESSION_NONE) {
        echo "Session ถูกใช้งาน";
    }else{
        echo "Session ยังไม่เริ่ม";
    }
    
?>
</body>
</html>