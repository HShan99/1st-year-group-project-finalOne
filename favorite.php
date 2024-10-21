<?php 
require_once "connection.php";

$sql_cart = "SELECT * FROM favorite";
$all_cart = $conn->query($sql_cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <?php
        include_once "productHeader.php";
    ?>
    <main>
        <h1><label>(<?php echo mysqli_num_rows($all_cart);?> )</label> Items</h1>
        <hr> 

        <?php
        $total = 0;
            while($row_cart = mysqli_fetch_assoc($all_cart)){
                $sql = "SELECT * FROM product WHERE product_id=".$row_cart["product_id"];
                $all_product = $conn->query($sql);
                while($row = mysqli_fetch_assoc($all_product)){
                
        ?>

        <div class="card">
            <div class="images">
                <img src="<?php echo $row["product_image"];?>" alt="image">
            </div>

            <div class="caption">
                <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="product_name"><b><?php echo $row["product_name"];?></b></p>
                <p class="price"><b><?php echo number_format($row["price"],2)?> LKR</b></p>
                <p class="discount"><b><del><?php echo number_format( $row["discount"],2);?> LKR</del></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"];?>">Remove from favorite</button>
            </div>
        </div>
         
        <?php }}?>
    
    </main>    
    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
    

</body>
</html>