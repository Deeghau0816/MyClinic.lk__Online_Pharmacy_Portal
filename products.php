<?php

include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>My Clinic.lk</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="products.css">
</head>
<body>

<?php include 'cartconnect.php'; ?>

<header class="headrer-nav" style="background-color: rgb(254, 254, 254);">
        <div class="header-nav-logo" style="background-color: rgb(254, 254, 254);">
            <img src="images/logo-home.png" alt="myclinic-logo">
            <nav class="header-main">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="category.php">Categories</a></li>
                    <li><a href="ourservices.php">Our Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
                <div class="header-main-sign">
                    <ul>
                        <li><a href="Registation.php">SIgn_In</a></li>
                        <li><a href="log.php">Log_In</a></li>
                    </ul>
                </div>
                
            </nav>
            <a href="#"><i class="fa-solid fa-user"></i></a>
        </div>
    </header>
    <hr>
    <?php



?>
   <h1>Product List</h1>

    <div class="product-display">

<section class="products">



   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">Rs. <?php echo $fetch_product['price']; ?>.00 /=</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <br>
            <input type="submit" class="btn" value="Add to cart" name="add_to_cart" onclick="productNot()">
            <br><br><br>
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!--Footer-->

<br><br>

<div class="footer">
    
    <div class="frow">
       <div class="footer-column">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="category.php">Categories</a></li>
            <li><a href="ourservices.php">Our Services</a></li>
        </ul>
       </div>
    
       <div class="footer-column"> 
        <h4>Useful Links</h4>
        <ul>
            <li><a href="privacy.php">Privacy policy</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="Terms.php">Terms and Conditions</a></li>
        </ul>
       </div>

       <div class="footer-column"> 
        <h4>Customer Services</h4>
        <ul>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
       </div>
    

<div class="SocialIcons">
    <h4>Follow us on</h4>
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>

</div>

<div class="footerBottom">
<p>Copyright &copy; 2024. My Clinic.Lk. All Rights Reserved</p>
</div>

</div>

<script src="product.js"></script>
</body>
</html>