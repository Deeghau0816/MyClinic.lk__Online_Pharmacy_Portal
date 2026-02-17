<?php

include 'adminconnect.php';

$PaymentID = $_GET['updateid'];
$sql = "SELECT * FROM payment WHERE PaymentID = '$PaymentID'";
$result = $con->query($sql);
$row=$result->fetch_assoc();
$name=$row['Name'];
$number=$row['Number'];
$expire=$row['Expire'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $name = $_POST["name"];
    $number = $_POST["number"];
    $expire = $_POST["expire"];
    


    $sql = "UPDATE payment SET   Name='$name', Number='$number', Expire='$expire' WHERE PaymentID='$PaymentID'";

    if($con->query($sql)) {
        //echo "Updated successfully";
        // Uncomment the header to redirect after updating
        header('location:paymentdisplay.php');
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
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>Payment Update</title>
    <style>

    body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #082238;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
input::placeholder {
            color: gray;
            font-style: italic;
            font-size: 13px;
            
        }
.container {
    max-width: 500px;
    width: 100%;
    background-color: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 30px; 
}
.h1 {
    
    position: fixed;
    top: 0;
    font-size : 30px;
    padding: 10px;
    text-align: center;
    font-family : Arial, sans-serif;
    font-weight: bold;
    color: white;
}
form {
    width: 100%;
    margin-top: 20px;
}
label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],

select {
    width: 95%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #cb5b93;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 4px;
}

input[type="submit"]:hover {
    background-color: rgb(233,8,113);
}

.back-button {
    display: inline-block;
    padding: 10px 15px;
    background-color: #4c4b4b;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    position: absolute;   
    top: 10px;            
    left: 10px; 
    
    
}

.back-button:hover {
    background-color:black;
}

select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0,123,255,.25);
}
</style>

</head>

<body>
<header class = "h1">Update Details</header>
<a href="paymentdisplay.php" class="back-button">← Back</a>
   
  <div class = "container">
    <form method="POST" action=" ">
            <div class = "form-group">
            <label for="name">Cardholder's Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
           </div>

           <div class = "form-group">
            <label for="number">Card Number</label>
            <input type="text" id="number" name="number" maxlength="16" value="<?php echo $number; ?>" required>
           </div>

           <div class = "form-group">
            <label for="expire">Expiry Date (MM/YY)</label>
            <input type="text" id="expire" name="expire" maxlength="5" value="<?php echo $expire; ?>" required>
           </div>

           <input type="submit" value="Update" class="button">

        </form>
</div>

</body>
</html>