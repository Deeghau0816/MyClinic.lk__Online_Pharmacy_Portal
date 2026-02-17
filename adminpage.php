<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>Admin Dashboard</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .admin-container {
            max-width: 900px;
            margin: 80px auto;
            padding: 20px;
            background-color: #fac8e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: black;
        }
        .admin-nav {
            display: flex;
            flex-direction: column; 
            align-items: center;    
            margin-top: 30px
        }
        .admin-nav a {

            font-size: 17px;
            text-decoration: none;
            color: white;
            background-color: #353333;
            padding: 20px 25px;
            margin: 20px;
            border-radius: 8px;
            text-align: center;
            width: 200px;
            transition: background-color 0.3s ease;
        }
        .admin-nav a:hover {
            background-color: rgb(233,8,113);
        }
        .top-bar {
            text-align: right;
            margin-bottom: 20px;
        }
        .logout-button {
            position: absolute;
            top: 20px;
            right: 300px;
            padding: 10px 20px;
            background-color: #eb0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
    }

    .logout-button a {
        text-decoration: none;
        color: white; 
        font-family: Arial, sans-serif;
        
    }

    .logout-button a:hover {
        text-decoration: none;
    }

    .logout-button:hover {
        background-color: #c00;
    }
    </style>
</head>
<body>
<button class="logout-button"><a href="log.php">Logout</a></button>
    <div class="admin-container">
      
        <h1>Admin Dashboard</h1>
        <div class="admin-nav">
            <a href="admindisplay.php">Admin Setup</a>
            <a href="supdisplay.php">View Customer Inquiries</a>
            <a href="paymentdisplay.php">Manage Payments</a>
            <a href="admin.php">Manage Products</a>
        </div>
    </div>

</body>
</html>