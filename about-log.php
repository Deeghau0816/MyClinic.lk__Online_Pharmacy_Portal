<?php //php connection via the "connect.php"
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
    <title>My Clinic.lk</title>
    <link rel="icon" type="image/jpg" href="images/title.png">
    <link rel="stylesheet" href="about.css">
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

    <hr>
    <br><br>

    <div class="about">

        <h2>About Us</h2>

        <div class="logo"><center><img class="logo" src="images/logo-home.png" alt="photo"></center></div>

        <p>Welcome to MyClinic.Lk, your trusted partner in health and wellness. 
        As an innovative online pharmacy, we are dedicated to providing convenient access
        to high-quality medications and health products, all from the comfort of your home.
        Founded on the principles of care, accessibility, and transparency, our mission is to ensure
        that everyone has the resources they need to lead healthier lives</p>
        <p>At MyClinic.Lk, we understand that navigating health needs can be overwhelming. 
        That's why our team of licensed pharmacists is committed to offering personalized 
        support and expert guidance, empowering you to make informed decisions about your health. 
        Whether you need prescription medications, over-the-counter remedies, or wellness products, 
        our extensive inventory is designed to meet all your health needs.</p>
        <p>We take pride in our user-friendly website, which makes ordering simple and hassle-free. 
        With just a few clicks, you can explore our comprehensive selection and have your products
        delivered right to your doorstep, often with same-day service. Safety and reliability are 
        at the core of our operations, and we adhere to the highest standards of quality and 
        confidentiality to protect your health information.</p>
        <p>At MyClinic.Lk, we believe that good health should be within everyone's reach. 
        That's why we are not just a pharmacy; we are a health partner committed to your 
        well-being. Our vision extends beyond transactions; we aim to build a community 
        of informed and empowered individuals who prioritize their health. 
        Join us on this journey towards better health, and experience the MyClinic.Lk
        difference today!</p>

        <center><table cellspacing="20">
            <tr><td><h3>- Our Management Team -</h3></td></tr>
            <tr>
                <td>
                    <center><img src="images/laya.webp">
                    <figure>Ms Tiara Nicolas <br> Account administrator </figure></center>
                </td>

                <td>
                <center><img src="images/young-pharmacist-vertical-portrait-male-box-treatment-standing-drug-store-foreground-34646447.webp" alt="">
                    <figure>Mr James Cruise <br> Pharmacist </figure></center>
                </td>

                <td>
                <center><img src="images/img1.jpg">
                    <figure>Ms Elena Grace <br> Sales Representive </figure></center>
                </td>

                <td>
                <center><img src="images/IMG_1441.JPG">
                    <figure>Mr John Smith <br> Software Engineer </figure></center>
                </td>
            </tr>
        </table></center>


    </div>

        <!--Footer-->

        <br><br>

        <div class="footer">
            
            <div class="frow">
               <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="Home-log.php">Home</a></li>
                    <li><a href="caregory-log.php">Categories</a></li>
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
    
</body>
</html>