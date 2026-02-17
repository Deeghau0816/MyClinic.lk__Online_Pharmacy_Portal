<?php   session_start(); //database connection via the 'connect.php'

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
    <link rel="stylesheet" href="TermsStyle.css">
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
            <a href="Home.html"><img src="images/logo-home.png" alt="myclinic-logo"></a>
            <nav class="header-main">
                <ul>
                    <li><a href="Home-log.php">Home</a></li>
                    <li><a href="category-log.php">Categories</a></li>
                    <li><a href="ourservices-log.php">Our Services</a></li>
                    <li><a href="about-log">About Us</a></li>
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

<!--Body-->
<h1>Terms & Conditions</h1>

    <div class="terms-box">
        <div class="text">
            
            <p>Last updated: April 2024</p>
            <p>These terms and conditions apply to users of the www.myclinic.lk online pharmacy platform, operated
                exclusively by "Myclinic.Lk" By accessing the www.myclinic.lk website and using its services,
                you agree to be legally bound by these terms. Throughout this agreement, you will be referred to as
                 “You,” “User,” “Member,” or “Buyer,” while the website will simply be referred to as “the Site.” 
                 If you do not agree with these terms, please do not use the website.</p>

                <p><h3>General</h3>Myclinic.lk retains the right to modify these terms at any time. 
                    Any updates or changes will be posted on this page, and by continuing to use the site after
                     such changes, you accept the revised terms.</p>
            <p><h3>Application and Acceptance of the Terms</h3>These terms will govern your use of the 
                www.myclinic.lk website, including its products and services. Your use will also be subject to
                 Myclinic.lk's separate privacy policy and any applicable third-party policies for linked websites. 
                 By continuing to use the website, you agree to comply with these terms and any future updates. 
                 Services are not available to minors or individuals legally prohibited from accessing them.</p>

            <p><h3>Provision of Services</h3>Registration may be necessary to access certain services on Myclinic.lk.
                We reserve the right to restrict or modify features at any time without prior notice.
                We can change, upgrade, or discontinue any services at our discretion, ensuring that paying users 
                are not adversely affected. All services and transactions are conducted exclusively online, with no
                physical store presence.</p>

                <p><h3>Users</h3><ol>
                   <li> By using this website, you agree to adhere to these terms and all applicable laws.</li>
                   <li> You may not copy, sell, or distribute any of the services, content, or materials from the site.</li>
                   <li> You agree to our privacy policy regarding your personal information.</li>
                    <li>You should be aware of the terms and policies of any third-party websites linked to Myclinic.lk, 
                        as we are not responsible for their content.</li>
                    <li>Unauthorized access to our systems is prohibited, and you agree not to attempt such actions.</li>
                    <li>You must not misuse the feedback system or create multiple accounts to manipulate feedback.</li>
                    <li>Any content you post may be freely utilized by Myclinic.lk and its affiliates.</li>
                    </ol>
                    <p><h3>Member Accounts</h3><ol>
                        <li>  Users must register to create an account. Only one account per user is allowed; we may suspend any accounts suspected of being duplicates.</li>
                         <li> Each account will receive a unique member ID and password, which you must keep confidential.</li>
                        <li> Sharing accounts is not allowed, and you must inform us of any suspicious activity.</li>
                        <li> You are responsible for all transactions made under your account.</li>
                        <li> You agree to indemnify Myclinic.lk for any losses arising from shared accounts or security breaches.</li>
                   </ol> </p>

                    <p><h3>Delivery</h3>Online orders are typically delivered within two business days 
                        (Weekdays: 8:00 AM – 6:00 PM, excluding Mercantile Holidays). Express delivery is available 
                        from 9:00 AM to 3:00 PM on weekdays.</p>
                        
                        <p><h3>Pickup Orders</h3>Since all transactions are conducted online, 
                            there are no physical store pickups. All orders will be delivered to the specified 
                            address.</p>
                        
                       <p><h3> Item Returns</h3> Please note that medical devices and medicines cannot be 
                        returned or exchanged once sold.</p>

        </div>
     
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

</body>
</html>