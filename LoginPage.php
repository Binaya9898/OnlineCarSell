<?php
session_start();
include './DatabaseConnection/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM Seller_Registration WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['Username'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['id'] = $row['Id'];
            header("location:./index.php");
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="style2.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your username"  name="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <div class="back-button">
                    <a href="index.html" class="label">back</a> 
                  </div>

                
            </div>

           

     <script src="script.js"></script> 
</body>
</html>