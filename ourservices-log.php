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
    <link rel="stylesheet" href="privacy.css">
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
            <a href="Home.html"><img src="images/logo-home.png" alt="myclinic-logo"></a>
            <nav class="header-main">
                <ul>
                    <li><a href="Home.php">Home</a></li>
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
    <hr>
    
    <!--Privacy and Policy body-->
    <br><br>
    <h2>Our Services</h2>

    <div class="privacy">
        <br><br>
        <p>At My Clinic.lk, we are dedicated to providing comprehensive healthcare services tailored 
            to meet the needs of every individual. Our clinic offers a wide range of medical services, 
            including general health check-ups, specialist consultations, diagnostic testing, and personalized 
            treatment plans. With a team of highly skilled and compassionate healthcare professionals, we 
            strive to deliver top-quality care in a comfortable and welcoming environment. Whether you need preventive 
            care, chronic disease management, or urgent medical attention, My Clinic.lk is your trusted partner in health 
            and well-being.

</p>
    </div>

    <!--Footer-->

    <br><br><br><br><br><br><br><br><br><br>

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
</body>