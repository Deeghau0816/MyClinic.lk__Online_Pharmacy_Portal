<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpg" href="images/title.png">
  <title>Display Payment Details</title>
  <style>

   body {
            font-family: Arial, sans-serif;
            background-image: url('payback.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;   
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: flex-start; 
            align-items: flex-start;    
            font-size: 17px;
        }

    .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    h1 {
            text-align: center;
            color: white;
        }

    table {
        width: 100%;
        border-collapse: collapse; /* Make the borders between table cells are collapsed */
        margin-top: 20px;
        background-color: white;
        border-radius: 10px;
     }

    th, td {
       padding: 16px;
       text-align: left;
       border-bottom: 1px solid #dddddd; 
       }

    th {
       background-color: #040d18; 
       color: white;
       text-transform: uppercase;
       letter-spacing: 0.05em;
       border-bottom: 3px solid #1a3566;
       }

    tr:nth-child(even) {
    background-color: #f2f2f2; /* Add background color for even rows */
    }

    tr:hover {
    background-color: #b0d2fb; 
    cursor: pointer;
    }

   td a {
    color: #dc3545;
    text-decoration: none;
   }

    .button1 {
        background-color: #1e589e; 
        color: white; 
        border: none;
        padding: 8px 12px;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .button1 a {
        text-decoration: none;
        color: white; 
    }

    .button1:hover {
        background-color: #000812; 
        text-decoration:none;
    }

    .back-button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #4c4b4b;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }

    .back-button:hover {
           background-color: black;
        }

</style>
 <script>
function confirmDelete(PaymentID) {
    if (confirm("Are you sure you want to delete this payment?")) {
        // Redirect to delete page with the PaymentID
        window.location.href = 'paymentdelete.php?deleteid=' + PaymentID;
    }
}

</script>
</head>

<body>
 <div class = "container">
 <a href="adminpage.php " class="back-button">← Back to Admin Page</a>
 <h1>Payment Details</h1>
 

 <table>
   
 <tr>

    <th colspan="2">Payment ID</th>
    <th>Method</th>
    <th>Cardholder's Name</th>
    <th>Card Number</th>
    <th colspan="2">Card Expiry Date</th>
    <th colspan="2">Action</th>
    
    
</tr>


<?php
include 'adminconnect.php';

$sql = "SELECT * FROM payment";

$result = $con->query($sql);

if($result->num_rows>0)
{   
    
    while($row=$result->fetch_assoc())
    {       
        echo "<tr>";
        echo "<td>".$row['PaymentID']."</td>";
        echo "<td></td>";
        echo "<td>".$row['Method']."</td>"; 
        echo "<td>".$row['Name']."</td>"; 
        echo "<td>".$row['Number']."</td>"; 
        echo "<td>".$row['Expire']."</td>";
        echo "<td></td>";
        echo "<td><button class='button1'><a href='paymentupdate.php?updateid=".$row['PaymentID']."'>Update</a></button></td>";
        echo "<td><button class='button1' onclick='confirmDelete(".$row['PaymentID'].")'>Delete</button></td>";
        echo "</tr>";
}
    
}
else{
    echo "No results";
}

$con->close();

?>
</table>
</div>

</body>
</html>