<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>User Account Details</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    

    <header class="headrer-nav" style="background-color: rgb(254, 254, 254);">
        <div class="header-nav-logo" style="background-color: rgb(254, 254, 254);">
            <a href="Home.html"><img src="images/logo-home.png" alt="myclinic-logo"></a>
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
<!--Form-->
    <section class="account-details">

    <h2>Account Details</h2>
    <form onsubmit="return updateDetails()">
    
        <label for="Name">Name <i class="fa-solid fa-user-tie"></i></label>              
        <input type="text" name="name" id="name" required placeholder="ex:- Navod Himsara">
        <br><br>

        <label for="Username">Username <i class="fa-regular fa-user"></i></label> 
        <input type="text" name="username" id="username" required placeholder="ex:- @george0816">
        <br><br>

        <label for="tel">Contact <i class="fa-solid fa-phone-volume"></i></label> 
        <input type="tel" name="contact" id="contact" required pattern="[0-9]{10}" placeholder="Ex:- 07xxxxxxxx">
        <br><br>
        
        <label for="email">Email <i class="fa-regular fa-envelope"></i></label>   
        <input type="email" name="email" id="email" required placeholder="ex:- namal@xmail.com">
        <br><br>
        
        <label for="address">Address <i class="fa-solid fa-map-location-dot"></i></label>  
        <input type="text" name="address" id="address" class="address" placeholder="Address">
        <br><br>

        <label for="date">Date of birth <i class="fa-regular fa-calendar-days"></i></label>  
        <input type="date" name="dob" id="dob" required>
        <br>

        <h3>Change Password</h3>

        <label for="new-password">New Password</label>
        <input type="password" id="new-password" placeholder="(8 characters)" maxlength="8">

        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" placeholder="(8 characters)" maxlength="8">
        
        
    </form>
</section>

      

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
            <li><a href="contact">Contact Us</a></li>
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

  <script src="account.js"> </script>
  
</body>
</html>
