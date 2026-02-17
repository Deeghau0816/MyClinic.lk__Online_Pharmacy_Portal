<?php  //login user access
    session_start();

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
    <title>Categories</title>
    <link rel="icon" type="image/jpg" href="images/title.png">
    <link rel="stylesheet" href="categ.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

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
            <img src="images/logo-home.png" alt="myclinic-logo">
            <nav class="header-main">
                <ul>
                    <li><a href="Home-log.php">Home</a></li>
                    <li><a href="category-log">Categories</a></li>
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

    <section class="categories">
        <h2>Categories</h2>

        <!--Linking categories page to products page-->
        <div class="category-grid">

            <div class="category">
                <a href="products-log.php"><img src="Images/pharmaceuticals.jpg" alt="Pharmaceuticals"></a>
                <h3>Pharmaceuticals</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/diet-nutrition.jpeg" alt="Diet & Nutrition"></a>
                <h3>Diet & Nutrition</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/pet-care.jpg" alt="Pet Care"></a>
                <h3>Pet Care</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/skin-care.jpg" alt="Skin Care"></a>
                <h3>Skin Care</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/hair-care.jpg" alt="Hair Care"></a>
                <h3>Hair Care</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/oral-care.jpeg" alt="Oral Care"></a>
                <h3>Oral Care</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/baby-care.jpg" alt="Baby Care"></a>
                <h3>Baby Care</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/vitamins-supplements.jpg" alt="Vitamins & Supplements"></a>
                <h3>Vitamins & Supplements</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/devices.jpg" alt="Devices"></a>
                <h3>Devices</h3>
                
            </div>
            <div class="category">
                <a href="products-log.php"><img src="Images/ayurvedic-care.jpg" alt="Ayurvedic Care"></a>
                <h3>Ayurvedic Care</h3>
                
            </div>
        </div>
    </section>


<!--Footer-->
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

    <script src="script2.js"></script>
</body>
</html>
