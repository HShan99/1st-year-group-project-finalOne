<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "productHeader.php"
    ?>

<!-- Body -->
<!-- top heading starts-->
<section class="toptitle">
            <h1>About Us</h1>
    </section>
<!-- top heading ends-->

<!-- content section starts-->
    <section class="about">
        <div class="about-content">
            <h3>What is Rajarata Books</h3>
            <p>At<i> Rajarata Books</i>, we provide facilities for people studying technology to buy their own books.  A special feature here is that you can download a complete PDF of the relevant books.  Accordingly, you can buy any technology-related book you want here.  Apart from this, you also have the opportunity to request books.</p>
            <a href="#" class="btn">Contact Us</a>
        </div>
        <div class="image-about">
            <img src="image/about.jpg" alt="">
        </div>
    </section>

<!-- content section ends-->

<!-- Social Links-->
<section class="social">
    <h1 class="heading"><span>Social Media</span></h1>
    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-whatsapp"></a>
        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
    </div>
    </section>

<!-- Social Links-->

<!-- team starts-->
<section class="blogs" id="blogs">
    <h1 class="heading"><span>Team</span></h1>

    <div class="swiper blog-slider">
       <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/team1.jpg" alt="">
                </div>
                <div class="content">
                    <center><h3>Shan Premakumara</h3>
                    <p>CEO</p></center>
                </div>

            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/team2.jpg" alt="">
                </div>
                <div class="content">
                    <center><h3>Vinod Jayasinghe</h3>
                    <p>Managing Director</p></center>
                </div>

            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/team3.jpg" alt="">
                </div>
                <div class="content">
                    <center><h3>Monika Mendis</h3>
                    <p>CTO</p></center>
                </div>

            </div>
       </div>
    </div>
</section>
<!-- team starts-->
<!-- end body-->

<?php
    include_once "footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>
    </body>

</html>




</body>
</html>