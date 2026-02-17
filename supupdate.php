<?php
include 'adminconnect.php';

if (isset($_GET['updateid'])) {
    $supID = $_GET['updateid'];  // Fetch the ID from URL
    
    // If form is submitted, update the status
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $status = $_POST['status']; // Get the status from the form

        if (strtolower($status) === 'done') {
            // Update the status to 'updated' in the database
            $sql = "UPDATE customersup SET Status='updated' WHERE SupID='$supID'";

            if ($con->query($sql)) {
                header('location:supdisplay.php'); // Redirect to display page after successful update
            } else {
                echo "<script>alert('Failed to update status!');</script>";
            }
        } else {
            echo "<script>alert('Invalid input. Please type \"done\" to update the status.');</script>";
        }
    }
} else {
    echo "Invalid request!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">

    <title>Update Inquiry Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c1e9d1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Update Inquiry Status</h2>
    <form action="" method="post">
        <label for="status">Enter 'done' to update the status:</label>
        <input type="text" id="status" name="status" placeholder="Type 'done'">
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>

