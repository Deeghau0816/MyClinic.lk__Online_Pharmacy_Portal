<?php

include 'config.php';

// Check if the 'add_to_cart' button was pressed
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   // Check if the product already exists in the cart
   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
    $message[] = 'product already added to cart';
 }else{
    $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
    $message[] = 'product added to cart succesfully';
 }
}

?>

<?php   session_start();

    include("connect.php");
    if(!isset($_SESSION['valid'])){
        header("Location: log.php");
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

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'cartconnect.php'; ?>

<!--PHP Connecting to Login Account-->
<?php
        $id=$_SESSION['id'];
        $query=mysqli_query($con, "SELECT * FROM table1 WHERE id=$id");

        while($result= mysqli_fetch_assoc($query)){
            $res_name=$result['name'];
            $res_username=$result['username']; 
            $res_contact=$result['contact']; 
            $res_email=$result['email']; 
            $res_address=$result['address'];
            $res_dob=$result['dob'];
            $res_id=$result['id'];
        }
    ?>

<!--Header-->
<header class="headrer-nav" style="background-color: rgb(254, 254, 254);">
        <div class="header-nav-logo" style="background-color: rgb(254, 254, 254);">
            <a href="Home.html"><img src="images/logo-home.png" alt="myclinic-logo"></a>
            <nav class="header-main">
                <ul>
                    <li><a href="Home-log.php">Home</a></li>
                    <li><a href="category-log.php">Categories</a></li>
                    <li><a href="ourservices-log.php">Our Services</a></li>
                    <li><a href="about-log.php">About Us</a></li>
                </ul>
                <div class="header-main-sign">
                    <ul>
                        <li><?php echo $res_username ?></li>
                        <li><a href="logOut.php">Log_Out</a></li>
                    </ul>
                </div>
                
            </nav>
            <a href="AccountDetails-log.php"><i class="fa-solid fa-user"></i></a>
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
      
      //display products 
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){ //a loop for products display
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
            <input type="submit" class="btn" value="Add to cart" name="add_to_cart" onclick="product()">
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
            <li><a href="Home-log.php">Home</a></li>
            <li><a href="category-log.php">Categories</a></li>
            <li><a href="ourservices-log.php">Our Services</a></li>
        </ul>
       </div>
    
       <div class="footer-column"> 
        <h4>Useful Links</h4>
        <ul>
            <li><a href="privacy-log.php">Privacy policy</a></li>
            <li><a href="faq-log.php">FAQ</a></li>
            <li><a href="Terms-log.php">Terms and Conditions</a></li>
        </ul>
       </div>

       <div class="footer-column"> 
        <h4>Customer Services</h4>
        <ul>
            <li><a href="contact-log.php">Contact Us</a></li>
            <li><a href="about-log.php">About Us</a></li>
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

<!-- custom js file link  -->
<script src="product.js"></script>

</body>
</html>