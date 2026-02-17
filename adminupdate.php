<?php

//connect file to database via the'adminconnect.php'
include 'adminconnect.php';

//get the Id 
$AdminID = $_GET['updateid'];

$sql = "SELECT * FROM admin1 WHERE AdminID = '$AdminID'";

// Execute the query and fetch the result as an associative array
$result = $con->query($sql);
$row=$result->fetch_assoc();

// Retrieve specific admin details from the fetched row
$adname=$row['Name'];
$ademail=$row['Email'];
$adrole=$row['Role'];
$adpassword=$row['Password'];
$adcontactno=$row['ContactNo'];

//check if the form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //getting updating values
    $adname = $_POST["A_name"];
    $ademail = $_POST["A_email"];
    $adrole = $_POST["A_role"];
    $adpassword = $_POST["A_password"];
    $adcontactno = $_POST["A_contactno"]; 

    //update details to database
    $sql = "UPDATE admin1 SET  Name='$adname', Email='$ademail', Role='$adrole', Password='$adpassword', ContactNo='$adcontactno' WHERE AdminID='$AdminID'";

    if($con->query($sql)) {
        //echo "Updated successfully";
        // Uncomment the header to redirect after updating
        header('location:admindisplay.php');
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
    <title>Add admin</title>
    <style>

    body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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
    padding: 20px;
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
input[type="email"],
input[type="password"],
input[type="confirm_password"],
input[type="contactno"],
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
<header class = "h1">Update Admin Details</header>
<a href="admindisplay.php" class="back-button">← Back</a>
   
  <div class = "container">
    <form method="POST" action=" " onsubmit="return validateForm()">

        <div class = "form-group">
        <label for="name">Name:</label>
        <input type="text" id="A_name" name="A_name" placeholder="enter name" value="<?php echo $adname; ?>" required>
        </div>

        <div class = "form-group">
        <label for="email">Email:</label>
        <input type="email" id="A_email" name="A_email" placeholder="enter email" value="<?php echo $ademail; ?>" required>
</div>

<div class = "form-group">
        <label for="role">Role:</label>
        <select id="A_role" name="A_role" required>
            <option value="Supplier">Supplier <?php if($adrole == 'Supplier') echo 'selected'; ?></option>
            <option value="Pharmacist">Pharmacist <?php if($adrole == 'Pharmacist') echo 'selected'; ?></option>
            <option value="System Admin">System Admin <?php if($adrole == 'System Admin') echo 'selected'; ?></option>
        </select>
</div>

<div class = "form-group">
        <label for="password">Password:</label>
        <input type="password"  id="A_password" name="A_password" placeholder="enter password" value="<?php echo $adpassword; ?>" required>
</div>

<div class = "form-group">
        <label for="contactno">Contact No:</label>
        <input type="contactno" id="A_contactno" name="A_contactno" placeholder="enter contactno" value="<?php echo $adcontactno; ?>" required>
</div>

<input type="submit" value="Update" class="button">
       
</form>

<script src=adminpage.js></script>

</div>

</body>
</html>