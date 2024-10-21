<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


        <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

        <!-- custom css file link-->
    <link rel="stylesheet" href="css/css.css">




</head>
<body>

<?php
    include_once "productHeader.php";
?>

<section class="toptitle">
            <h1>Contact</h1>
    </section>
	<section class= "des" id="des">
	<P>We are always happy to hear from our customers and readers. If you have any questions, comments, or suggestions, please feel free to contact us.</p>

	</section>
	<h1 class="heading"><span>Contact Us</span></h1>
        <section class="contacts" id="contacts">

            <div class="div1">
        
                <div class="row">   
        
                <address>
                    <dl>
                        <dt>Rajarata Books <br>
                            Mihinthale,<br>
                            Srilanka.<br>
                        </dt><br>
                        <dd><span>LandPhone:</span>+94 66 4 123 456</dd><br>
                        <dd><span>Telephone:</span>+94 71 4 183 456 </dd><br>
                        <dd><span>FAX:</span>+94 800 898 898</dd><br>
                        <dd>E-mail: <a href="#" class="col1">info@rajaratabooks.com</a></dd>
                    </dl>
                                </address>
        
            </div>
            </div>
        
            <div class="div2">
                <h3> Get in Touch</h3>
                <form action="https://formspree.io/f/moqorjwg" method="POST">
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="Name"> 
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="country" placeholder="Country"> 
                    </div>
                    <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
                    <div>
                    <input type="submit" class="btn" value="send message">
                    </div>
                </form>
            </div>
        
        </section>

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