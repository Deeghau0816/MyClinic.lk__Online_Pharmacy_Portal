<?php

include 'adminconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["name"];
$phone=$_POST["contactno"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
$status = $_POST["status"]; // Retrieve the status (pending)

//adding details to database
$sql = "INSERT INTO customersup (name, contactno, email, subject, message, status)
VALUES('$name','$phone','$email','$sub','$msg', '$status')";

if($con->query($sql))
{
    echo "<script>
       
    var userResponse = confirm('Record Added successfully. Do you want to be redirected to the home page?');
    window.location.href='Home.php'   
    </script>";
}
else
{
    echo "<script>
        alert('Add Unsucsesfull');
        </script>"; 

}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>Contact & Customer Support</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="contact.css">
</head>
<body>

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
            <a href="AccountDetail.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </header>

    <div class="container">
        <h1><center>Contact & Customer Support</center></h1>

         <br>
         <br>
         <br>
        <img src="images/img.jpg" alt="img" width="300" height="300">
        <div class="text-container">
        <p>We're here to help! If you have any questions,<br>
        concerns, or need assistance with your order, our dedicated customer<br>
        support team is available 24/7 to assist you. Please feel free to<br>
        reach out to us via phone or email. Your satisfaction is our priority,<br>
        and we strive to provide prompt and reliable support to <br>ensure your experience with us is seamless and enjoyable.</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
        <form action=" " method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name">

            <label for="phone">Phone Number</label>
            <input type="tel" id="contactno" name="contactno" placeholder="Your Phone Number">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your Email">

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject">

            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Type your message here"></textarea>

            <input type="hidden" name="status" value="pending">  

            <button type="submit">Submit</button>
          </form>
        <div class="contact-info">
            <h4>Have any questions?</h4>
            <p>Phone: +94 77 123 4567</p>
            <p>Email: support@example.com</p>
        </div>

    </div>

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

</body>
</html>
