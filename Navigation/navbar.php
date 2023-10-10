<header class="header">
        <a href="#" class="logo">Online Car Selling</a>
        <nav class="navbar">
                <a href="<?php echo $siteurl . 'index.php' ?>" class="active">Homepage</a>
                <a href="<?php echo $siteurl . 'Registration/registration.php' ?>">Seller Registration</a>


                <a href="<?php echo $siteurl . 'aboutus.php' ?>">About Us</a>
                <a href="<?php echo $siteurl . 'AddCar/addcar.php' ?>">Add Car</a>

                <?php if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) : ?>

                        <a href="<?php echo $siteurl . 'LoginPage.php' ?>">Seller Login</a>
                <?php else : ?>

                        <a href="<?php echo $siteurl . '/Logout/logout.php' ?>">Welcome, <?php echo $_SESSION["username"]; ?></a>
                <?php endif; ?>
                </nav>
                <div class="social-media">
                        <a href="https://twitter.com"><i class='bx bxl-twitter'></i></a>
                        <a href="https://facebook.com"><i class='bx bxl-facebook'></i></a>
                        <a href="https://instagram.com"><i class='bx bxl-instagram-alt'></i></a>
                </div>
        
</header>