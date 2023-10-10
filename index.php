<?php
include './Partials/siteurl.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>|| Online Car Sell ||</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <?php
        include './Navigation/navbar.php';
        ?>
        <section class="home">
            <div class="home-content">
            <h1>Welcome to Online Car Sell</h1>
            <h3>About Us </h3>
            <p>Our mission is to provide a platform where you can browse a wide selection of cars, from brand new models to quality used vehicles. Whether you're looking for your dream car or selling your current one, we've got you covered.</p>
            <form action="<?php echo $siteurl . '/Cars/viewcars.php' ?>" method="POST">
    <input type="text" class="searchbox" name="sbox">
    <button class="btn" type="submit" id="ss">Search Cars</button>
</form>

            </div>
            <div class="home-img">
                <div class="rhombus">
                    <img src="./images/car.png" alt="">
                </div>
            </div>
            <div class="rhombus2"></div>
            </section>
            
         <script>

         </script>   

    
    </body>
</html>