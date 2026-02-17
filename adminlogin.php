<?php
session_start();
include 'adminconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ademail = $_POST["A_email"];
    $adpassword = $_POST["A_password"];

    // Check if the email and the password match and the role is "System Admin"
    $sql = "SELECT * FROM admin1 WHERE Email='$ademail' AND Password='$adpassword' AND Role='System Admin'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        // Fetch admin details
        $row = $result->fetch_assoc();
        $_SESSION['adminid'] = $row['AdminID'];
        $_SESSION['adminname'] = $row['Name'];

        // go to the admin dashboard
        header("Location: adminpage.php");
    } else {
        echo "<script>alert('Invalid admin credentials, try again');</script>";
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
    <title>Admin Login</title>
    <style>
    body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: rgb(239, 201, 218);
            font-size:18px;
        }

        .login-container {
            background-color: white;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size:26px;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: rgb(229, 99, 158);
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: block;  
            margin: 20px 10px;  
        }

        input[type="submit"]:hover {
            background-color: rgb(221, 14, 63);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form method="POST" action="">
            <label for="email">Email:</label>
            <input type="email" name="A_email" placeholder="Email" required>
            
            <label for="password">Password:</label>
            <input type="password" name="A_password" placeholder="Password" required>
            
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
