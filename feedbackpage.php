<?php

include 'feedbackconnect.php';


// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

//adding customer feedback and details to database
$sql = "INSERT INTO feedback5 (name, email, message)
VALUES ('$name','$email','$message')";

// Execute the query and check if it was successful
if($con->query($sql))
{
    //echo "New feedback added successfully";
    header('location:feedbackdisplay.php');
}
else{
    echo "Error".$con->error;
}

$con->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="icon" type="image/jpg" href="images/title.png">
    <link rel="stylesheet" type="text/css" href="feedback.css">
    
   
</head>

<body>

<section></section>
  <div class = "container">
    <form method="POST" action=" ">
        <h1>Give Your Feedback</h1>
        

        <div class = "form-group">
        <input type="text" name="name"id="name" placeholder="Name" required>
        <span id="name_error"></span>
        </div>

        <div class = "form-group">
        <input type="email" name="email" id="email" placeholder="Email" required>
        <span id="email_error"></span>
</div>

       <div class = "form-group">
        <input type="message" name="message" id="message" placeholder="Your Opinions" required></textarea>
        <span id="message_error"></span>
</div>

<input type="submit" value="Submit" class="button">
<br>
<br>
<a href="feedbackdisplay.php" class="view-feedback">View Previous Feedbacks</a>
       
</form>
</div>
<script>src="feedback.js"</script>
</body>
</html>