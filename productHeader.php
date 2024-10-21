<?php 
require_once "connection.php";

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rajarata Books</title>

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        
        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
        
        <!-- custom css file link-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- HEADER SECTION STARTS -->
        <div class="header">
            <div class="header-1">
                <a href="index.php" class="logo"><i class="fas fa-book"></i>RAJARATA BOOKS</a>

                <form action="" class="search-form">
                    <input type="search" name="" placeholder=" search books here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <a href="favorite.php" class="fas fa-heart"></a> 
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                    <span id = "badge"><?php echo mysqli_num_rows($all_cart); ?></span>
                    <a href="login_form.php" class="fas fa-user"></a>
                </div>
            </div>
            <div class="header-2">
                <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">Blog</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                </nav>
            </div>
        </div>
<!-- Header section end -->

<!-- BOTTOM NAVBAR -->

<nav class="bottom-navbar">
            <a href="index.html" class="fas fa-home"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-users"></a>
            <a href="#" class="fas fa-blog"></a>
            <a href="#" class="fas fa-address-book"></a>
        </nav>
        
        <!-- LOGGING FORM-->
        <!-- <div class="login-form-container"> -->

            <div id="close-login-btn" class="fas fa-times"></div>



            <!-- <form action="">
                <h3>Sign in</h3>
                <span>username</span>
                <input type="email" name="" class="box" placeholder="Enter your email" id="">
                <span>password</span>
                <input type="password" name="" class="box" placeholder="Enter your password" id="">
                <div class="checkbox">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me">remember me</label>
                </div>
                <input type="submit" value="sign in" class="btn">
                <p>forget password ? <a href="#">click here</a></p>
                <p>don't have an account ? <a href="register_form.php">create account</a></p>
            </form> -->
</div>