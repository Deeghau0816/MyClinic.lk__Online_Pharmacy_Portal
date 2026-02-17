<?php

include 'feedbackconnect.php';

// Getting the FeedbackID from the URL
$FeedbackID = $_GET['updateid'];
$sql = "SELECT * FROM feedback5 WHERE FeedbackID = '$FeedbackID'";

// Query to select feedback based on FeedbackID
$result = $con->query($sql);
$row=$result->fetch_assoc();
$name=$row['Name'];
$email=$row['Email'];
$message=$row['Message'];



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   
    //update the feedback based on the Feedback ID
    $sql = "UPDATE feedback5 SET  Name='$name', Email='$email', message='$message' WHERE FeedbackID='$FeedbackID'";

    if($con->query($sql)) {
        //echo "Updated successfully";
        // Uncomment the header to redirect after updating
        header('location:feedbackdisplay.php');
    } else {
        echo "Error";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Feedback</title>
    <link rel="icon" type="image/jpg" href="images/title.png">
    <link rel="stylesheet" type="text/css" href="feedbackup.css">


</head>

<body>
<section></section>
<div class = "container">
<form method="POST" action=" ">
<h1>Update Feedback</h1>
<a href="feedbackdisplay.php" class="back-button">← Back</a>
   
        <div class = "form-group">
        <input type="text" name="name" placeholder="name" value="<?php echo $name; ?>" required>
        </div>

        <div class = "form-group">
        <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>" required>
</div>


<div class = "form-group">
       <input type="message" name="message" placeholder="message" value="<?php echo $message; ?>" required>
</div>

<input type="submit" value="Update" class="button">
       
</form>
</div>

</body>
</html>