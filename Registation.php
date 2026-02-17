<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>Registation</title>
    <link rel="stylesheet" href="Registation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    

    <div class="Registation">
        <br><br>
        <!--Sign Up-->
        <center><div class="signUp sign-container">
            
        
        <?php
        include ("connect.php");

        //if clicks on SignIn button
        if(isset($_POST['submit'])){

            $name = $_POST['uname'];
            $username = $_POST['username'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $password = $_POST['password'];

            //verifying email
            $verify_query = mysqli_query($con,"SELECT email FROM table1 WHERE email='$email'");

            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                    <p>This email used before. Try Again!</p></div><br>";   
            }
            else{

                //enter user details to query
                mysqli_query($con,"INSERT INTO table1(name,username,contact,email,address,dob,password) VALUES('$name','$username','$contact','$email','$address','$dob','$password')") or die("Error"); 
            
            echo "<div class='message'><p>Registation successfully! <i class='fa-solid fa-check-double'></i></p></div><br>";
            echo "<a href='log.php'><button class='btn'>Log In</button></a>";       
            }   
        }else{
        ?>

            <form action="" method="post" onsubmit="return registation()"> <!--Getting customer registation details-->
                <h1>Create Account</h1>
                
                <br>
                <span><b>Enter your Details to Register in <i>My Clinic.lk</i></b></span>
                <br><br>

                <p id="result">*Enter your Valid details</p>
                <label for="Name">Name <i class="fa-solid fa-user-tie"></i></label>
                <br>                
                <input type="text" name="uname" id="name" required placeholder="ex:- Navod Himsara">
                <br><br>

                <label for="Username">Username <i class="fa-regular fa-user"></i></label> 
                <br>  
                <input type="text" name="username" id="username" required placeholder="ex:- @user123">
                <br><br>

                <label for="tel">Contact <i class="fa-solid fa-phone-volume"></i></label> 
                <br>  
                <input type="tel" name="contact" id="contact" required pattern="[0-9]{10}" placeholder="Ex:- 07xxxxxxxx">
                <br><br>
                
                <label for="email">Email <i class="fa-regular fa-envelope"></i></label>   
                <br>
                <input type="email" name="email" id="email" required placeholder="ex:- namal@xmail.com">
                <br><br>
                
                <label for="address">Address <i class="fa-solid fa-map-location-dot"></i></label>  
                <br>
                <input type="text" name="address" id="address" class="address" placeholder="Address">
                <br><br>

                <label for="date">Date of birth <i class="fa-regular fa-calendar-days"></i></label>  
                <br> 
                <input type="date" name="dob" id="dob" max="" required>
                <br><br>
                
                <label for="password">Enter a Password <i class="fa-solid fa-lock"></i></label> 
                <br>  
                <input type="password" name="password" id="password" class="password" required placeholder="(8 characters)">
                <br><br>

                <label for="password">Confirm the Password <i class="fa-solid fa-unlock-keyhole"></i></label>  
                <br>
                <input type="password" class="con-password" placeholder="Re-Enter Password">
                <br><br>
                
                <br><br>
                <div class="submit"><input type="submit" name="submit" value="Sign In" required></div>
                <br>
                
                <div><a href="log.php"> Existing customer? Click on this link</a></div>
            
            </form>
            <?php } ?>
        </div></center>
        
    </div>

<script src="Registation.js"></script>
</body>
</html>