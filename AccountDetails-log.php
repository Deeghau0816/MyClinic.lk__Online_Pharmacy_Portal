<?php //connect with database via the "connect.php" file
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
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>User Account details</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
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
                        <li><a href="logOut.php">Log_Out</a></li>
                    </ul>
                </div>
                
            </nav>
            <a href="AccountDetails-log.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </header> 


    <section class="account-details">
    <?php 
    //getting database stored details to display on account details page
       if(isset($_POST['submit']) ){

        $name=$_POST['uname'];
        $username=$_POST['username'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $password=$_POST['password'];
        
        
        $id=$_SESSION['id'];

        //Updating commands parts to queries
        $editing=mysqli_query($con,"UPDATE table1 SET name='$name',username='$username', contact='$contact', email='$email', address='$address' , dob='$dob', password='$password'  WHERE id ='$id'") or die ("Error");
       
    }else{
        
        $id= $_SESSION['id'];

        // Execute a SQL SELECT query to fetch the current user's details
        $query =mysqli_query($con,"SELECT*FROM table1 WHERE id=$id ");

        // Loop 
        while($result = mysqli_fetch_assoc($query)){
            
            $res_name=$result['name'];
            $res_username=$result['username'];
            $res_contact=$result['contact'];
            $res_email=$result['email'];
            $res_address=$result['address'];
            $res_dob=$result['dob'];
            $res_password=$result['password'];
            $res_id=$result['id'];
        }

 ?>       


<!--Form-->
    <h2>Account Details</h2>

    <form action="" method="post" onsubmit="return updateDetails()">
        <label for="Name">Name <i class="fa-solid fa-user-tie"></i></label>
        <br>                
        <input type="text" name="uname" id="name" value="<?php echo $res_name; ?>" required placeholder="ex:- Navod Himsara">
        <br><br>

        <label for="Username">Username <i class="fa-regular fa-user"></i></label> 
        <br>  
        <input type="text" name="username" id="username" value="<?php echo $res_username; ?>" required placeholder="ex:- @george0816">
        <br><br>

        <label for="tel">Contact <i class="fa-solid fa-phone-volume"></i></label> 
        <br>  
        <input type="tel" name="contact" id="contact" value="<?php echo $res_contact; ?>" required pattern="[0-9]{10}" placeholder="Ex:- 07xxxxxxxx">
        <br><br>
        
        <label for="email">Email <i class="fa-regular fa-envelope"></i></label>   
        <br>
        <input type="email" name="email" id="email" value="<?php echo $res_email; ?>" required placeholder="ex:- namal@xmail.com">
        <br><br>
        
        <label for="address">Address <i class="fa-solid fa-map-location-dot"></i></label>  
        <br>
        <input type="text" name="address" id="address" value="<?php echo $res_address; ?>" class="address" placeholder="Address">
        <br><br>

        <label for="date">Date of birth <i class="fa-regular fa-calendar-days"></i></label>  
        <br> 
        <input type="date" name="dob" value="<?php echo $res_dob; ?>" id="dob" required>
        <br><br>

        <h3>Change Password</h3>

        <label for="new-password">New Password</label>
        <input type="password" id="new-password" placeholder="(8 characters)" maxlength="8">

        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="password" placeholder="(8 characters)" maxlength="8">
        
        <div class="submit"><input type="submit" name="submit" value="Save Changes" required></div>
       
        
    </form>

    <br>
    <!--delete part-->
    <div class= "delete"><form method="post" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $res_id; ?>">
            <input onclick="idGet()" type="submit" name="delete" value="Delete" required>

            <br><br>
            <div class="feed">Add your honest <a href="feedbackpage.php">Feedback!</a></div>
        </form>
    </div>

    <?php } ?>
</section>

<br>


      

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
            <li><a href="privacy-lo.php">Privacy policy</a></li>
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

  <script src="account.js"> </script>
  
</body>
</html>