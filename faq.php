
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="icon" type="image/jpg" href="images/title.png">
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<header class="headrer-nav" style="background-color: rgb(254, 254, 254);">
        <div class="header-nav-logo" style="background-color: rgb(254, 254, 254);">
            <a href="Home.php"><img src="images/logo-home.png" alt="myclinic-logo"></a>
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
            <a href="AccountDetails.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </header>

    <br>

<div class="container">
    <h1>Frequently Asked Questions</h1>

    <div class="faq">
        <div class="faq-question">Do I need an account to place an order?</div>
        <div class="faq-answer">
            <p>Having an account is not essential as you can select Checkout as Guest to complete an order without logging in. Any orders placed as a guest require you to manually enter your address and payment information, and it will not be saved for future reference.</p>
        </div>

        <div class="faq-question">What payment methods do you accept?</div>
        <div class="faq-answer">
            <p>We accept all credit cards through secured payment gateways. Bank transfers and cash on delivery are also available.</p>
        </div>

        <div class="faq-question">Do I need a prescription to order medicine?</div>
        <div class="faq-answer">
            <p>Yes. You need to upload an image of the prescription to order medicine. Additionally, you need to present the original copy of the prescription at the time of delivery or order pick-up.</p>
        </div>

        <div class="faq-question">How long will it take to receive my order?</div>
        <div class="faq-answer">
            <p>Delivery could take up to 10 days based on your location.</p>
        </div>

        <div class="faq-question">Do you deliver Islandwide?</div>
        <div class="faq-answer">
            <p>Yes, we provide island-wide delivery for all items except medications.</p>
        </div>

        <div class="faq-question">How can I check if medicines that I have ordered are available?</div>
        <div class="faq-answer">
            <p>After you place your order, one of our pharmacists will inform you regarding the availability of the medicine you ordered or if any other substitute brands are available.</p>
        </div>
    </div>
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

<script>
    // JavaScript to toggle the visibility of answers
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach((question) => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
        });
    });
</script>

</body>
</html>