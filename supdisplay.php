<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Customer Inquiries</title>
  <link rel="icon" type="image/jpg" href="images/title.png">

  <style>

   body {
            font-family: Arial, sans-serif;
            background-image: url('supback.jpg'); /* location of the image*/
            background-size: cover; 
            background-position: center; 
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: flex-start; 
            align-items: flex-start;  
              
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
            font-size:24px;
        }

    table {
        width: 100%;
        border-collapse: collapse; 
        margin-top: 20px;
        background-color: white;
    }

    th, td {
       padding: 16px;
       text-align: left;
       border-bottom: 1px solid #dddddd; 
       }

    th {
       background-color:#10291c;    
       color: white;
       text-transform: uppercase;
       letter-spacing: 0.05em;
       border-bottom: 3px solid #1a3566;
       }

    tr:nth-child(even) {
    background-color: #f2f2f2; 
    }

    tr:hover {
    background-color: #b6ffd3; 
    cursor: pointer;
    }

   td a {
    color: #dc3545;
    text-decoration: none;
   }

    .button1 {
        background-color: #00803e; 
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
            background-color: #171818;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 5px;
        }

    .back-button:hover {
           background-color: black;
        }
   </style>

<script>

function confirmDelete(SupID) {
    
    if (confirm("Are you sure you want to delete this inquiry?")) {
        window.location.href = 'supdelete.php?deleteid=' + SupID;
    }
    return false;
}


</script>

</head>

<body>
 <div class = "container">
 <a href="adminpage.php " class="back-button">← Back to Admin Page</a>
 <h1>Inquiries</h1>
 

 <table>
   
 <tr>

    <th colspan="2">Support ID</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th colspan="2">Status</th>
    <th colspan="2">Action</th>
    
</tr>

<?php
include 'adminconnect.php';

$sql = "SELECT * FROM customersup";

$result = $con->query($sql);

if($result->num_rows>0)
{   
    
    while($row=$result->fetch_assoc())
    {       
        echo "<tr>";
        echo "<td>".$row['SupID']."</td>";
        echo "<td></td>";
        echo "<td>".$row['Name']."</td>"; 
        echo "<td>".$row['ContactNo']."</td>"; 
        echo "<td>".$row['Email']."</td>"; 
        echo "<td>".$row['Subject']."</td>";
        echo "<td>".$row['Message']."</td>"; 
        echo "<td>".$row['Status']."</td>"; // Display the status
        echo "<td></td>";
        echo "<td><button class='button1'><a href='supupdate.php?updateid=".$row['SupID']."'>Update</a></button></td>";
       echo "<td><button class='button1' onclick='confirmDelete(".$row['SupID'].")'>Delete</button></td>";
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