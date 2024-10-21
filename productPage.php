<?php
require_once 'connection.php';
$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productStyle.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'productHeader.php';
    ?>
    <main>
        <?php 
            while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="image">
                <img src="<?php echo $row["product_image"];?>" alt="image">
            </div>
            <div class="caption">
               <p class="product_name"><b><?php echo $row["product_name"];?></b></p>
               <p class="price"><b><?php echo $row["price"];?> LKR</b></p>
               <p class="discount"><b><del><?php echo $row["discount"];?> LKR</del></b></p>
            </div>
            <button class="add" data-id=" <?php echo $row["product_id"]; ?>">Add to cart</button>

        </div>
        <?php
            }
        ?>
    </main>
    <script>
        var product_id = document.getElementsByClassName("add");
        for(var i=0; i<product_id.length; i++){
            product_id[i].addEventListener("click",function(event){
                var target = event.target;
                var id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        var data = JSON.parse(this.responseText);
                        target.innerHTML = data.in_cart;
                        document.getElementById("badge").innerHTML = data.num_cart +1;
                    }
                }
                xml.open("GET","connection.php?id="+id,true);
                xml.send();
            })
        }
    </script>

    <?php
        include_once "footer.php";
    ?>
</body>
</html>