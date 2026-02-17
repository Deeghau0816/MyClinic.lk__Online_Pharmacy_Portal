<?php
    session_start(); //start with the resume or recently started session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>Log In</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="user-login">
     <!--Log In-->
     <center><div class="logIn">

     <?php
        include ("connect.php");  // Include database connection

        // Check if the form is submitted
        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);

            //checking added email and password
            $result = mysqli_query($con,"SELECT * From table1 WHERE email='$email' AND password='$password'") or die("Error");
            
            // Fetch the result as an associative array
            $row = mysqli_fetch_assoc($result);

            //check user details
            if(is_array($row) && !empty ($row)){
                $_SESSION['valid'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['contact'] = $row['contact'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];

            }else{
                echo "<div class='message'>
                     <p>Something went wrong. Try again!</p></div><br>";
                echo "<a href='log.php'><button class='btn'>Go back</button></a>";
                
            }
            if(isset($_SESSION['valid'])){
                
                header("Location: Home-log.php"); //if the login successfully, make a path to logged home page
                alert("Login Successfully!");
            }

        }else{
    ?>

        <form action="" method="post">
            <h1>Log In</h1>
            <br><br>

            <label for="email">Email</label>
            <br>                
            <input type="email" name="email" required placeholder="Email">
            <br><br>

            <label for="password">Password</label> 
            <br>  
            <input type="password" name="password" required placeholder="Password">
            <br><br>
            
            <center><a href="contact.php">Forget your password?</a></center>
            <center><a href="Registation.php">New customer? <b>Click on this link.</b></a></center>
            <br><br>
            <input class="log-class" type="submit" name="submit" value="Log In">
            <br><br><a href="adminlogin.php">If you are an Admin <b>Login from here</b></a>
        </form>
        <?php } ?>
    </div></center>
</div>

<script src="log.js"></script>
</body>