<?php   session_start(); //connection to database via the 'connect.php'

    include("connect.php");
    if(!isset($_SESSION['valid'])){
        header("Location: log.php"); // if log in didn't valid, it will bring customer to login page
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>My Clinic.lk</title>
    <link rel="stylesheet" href="home.css">
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
            <a href="Home.php"><img src="images/logo-home.png" alt="myclinic-logo"></a>
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

    <br>
    
   <div class="search-box">
    
        <div class="row">
            <input type="text" id="input-box" placeholder="Search..." autocomplete="off" class="searchbar">
            <button class="icon" onclick="listSearchLog()"><i class="fa-solid fa-magnifying-glass" style="color: aliceblue;"></i></button>
       </div>

       <div class="cart">
            <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
       </div>
       <div class="result-box"></div>        
    </div>
    <br>
    <hr>
    <!--Image slider-->
    <div class="slider">
        <div class="slides">
            <img class="slide" src="photo/Baby_Carelink_l.jpg" alt="image #1">
            <img class="slide" src="photo/Cetaphil_Carelinkl1.jpg" alt="image #2">
            <img class="slide" src="photo/Diabetasol_LL.jpg" alt="image #1">
            <img class="slide" src="photo/Ganesha_Carelink_L1.jpg" alt="image #1">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094</button>
        <button class="next" onclick="nextSlide()">&#10095</button>
    </div>

    <br>
    <hr>
    <br>

    <!--Best Selling tables-->
    <center><div class="tsale"><h1 class="sales"><marquee>- Best Sellings -</marquee></h1></div></center>

    <div>
    <center><table cellspacing="30">
        <tr>
            <td><img src="photo/h1.jpg" width="230px" height="250px"> <center><figure>Ayurvedic Toothpaste <br> Rs.180.00 <br></figure><a href="products-log.php"><button>View</button></a></center> <br></td>
            <td><img src="photo/h2.jpg" width="230px" height="250px"> <center><figure>Farley's Rusks 120g <br> Rs.510.00 <br></figure><a href="products-log.php"><button>View</button></a></center> <br></td>
            <td><img src="photo/h3.jpg" width="230px" height="250px"> <center><figure>Baby cheramy 350g <br> Rs.680.00</figure><a href="products-log.php"><button>View</button></a></center> <br></td>
            <td><img src="photo/h4.jpg" width="230px" height="250px"> <center><figure>Weight Gainer <br>Rs.5,150.00</figure><a href="products-log.php"><button>View</button></a></center> <br></td>
        </tr>
        <tr>
            <td><img src="photo/h5.jpg" width="230px" height="250px"> <center><figure>Herbal Oil 100ml <br> Rs.900.00</figure><a href="products-log.php"><button>View</button></a></center> <br></td>
            <td><img src="photo/h6.jpg" width="230px" height="250px"> <center><figure>Prime E 1000 <br> Rs.110.00</figure><a href="products-log.php"><button>View</button></a></center> <br></td>
            <td><img src="photo/h7.jpg" width="230px" height="250px"> <center><figure>Knee Guard <br> Rs.1,190.00</figure><a href="products-log.php"><button>View</button></a></center> <br></td>
            <td><img src="photo/h8.jpg" width="230px" height="250px"> <center><figure>Medimix Ayurvedic <br>Face Wash 100ml</figure><a href="products-log.php"><button>View</button></a></center> <br></td>
        </tr>
    </table></center>

    <a href="products-log.php" class="table-link"><i class="fa-solid fa-hand-point-up"></i> Click here to see more...</a>
</div>

    <br><hr>

    <div class="video-class">
        <br>
        <center><a target="blank" href="#" class="video">
        <video src="images/Signal Strong Teeth New - S.mp4" width="50%" height="80%" controls autoplay muted loop></video>
        <!--Video source = https://youtu.be/VM6opKcA2qE?si=zUv_tN4SokZnOFV7-->
    </a></center>
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

    
<script src="Home.js"></script>
</body>
</html>