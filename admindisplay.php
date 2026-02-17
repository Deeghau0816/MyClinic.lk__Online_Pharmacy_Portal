<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpg" href="images/title.png">
  <title>Display admin</title>
  <style>

   body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }

        .addadmin {
            padding: 12px 24px;
            background-color: rgba(171, 0, 37, 0.893); 
            color: white; 
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            
        }

        .addadmin:hover {
            background-color: rgba(255, 56, 99, 0.893); 
        }

        .addadmin a {
        color: white; 
        text-decoration: none; 
        font-size: 16px; 
    }

    .addadmin a:hover {
        color: white;
    }
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            
        }
        th,td {
            border: 1px solid #3b3b3;
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: rgba(4, 33, 38, 0.893);
            color: white;
           
          
            
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        td a {
            color: #dc3545;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: none;
        }
        
    
    .button1 {
        background-color: rgba(174, 0, 0, 0.893); 
        color: white; 
        border: none;
        padding: 8px 12px;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 14px;
    }

    
    .button1 a {
        text-decoration: none;
        color: white; 
    }

   
    .button1:hover {
        background-color: rgba(27, 0, 6, 0.893); 
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
    //confirmation box to delete
function confirmDelete(adminID) {
    
    if (confirm("Are you sure you want to delete this admin?")) {
        window.location.href = 'admindelete.php?deleteid=' + adminID;
    }
    return false;
}
</script>

</head>

<body>
 <div class = "container">
 <a href="adminpage.php " class="back-button">← Back to Admin Page</a>
 <h1>Admin User Dashboard</h1>
 <button class="addadmin"><a href="useradmin.php" > Add Admin </a></button>

 <table>
   
 <tr>

    <th colspan="2">Admin ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Password</th>
    <th colspan="2">Contact No</th>
    <th colspan="2">Action</th>
    
</tr>

<?php
include 'adminconnect.php';

$sql = "SELECT * FROM admin1";

$result = $con->query($sql);

// Check if the query returned more than 0 rows
if($result->num_rows>0)
{   
    
    // Loop through each row of the result set
    while($row=$result->fetch_assoc())
    {       
        echo "<tr>";
        echo "<td>".$row['AdminID']."</td>";
        echo "<td></td>";
        echo "<td>".$row['Name']."</td>"; 
        echo "<td>".$row['Email']."</td>"; 
        echo "<td>".$row['Role']."</td>"; 
        echo "<td>".$row['Password']."</td>";
        echo "<td>".$row['ContactNo']."</td>"; 
        echo "<td></td>";
        // 'Update' and 'Delete' buttons that links to the adminupdate.php page with the AdminID to delete or update the query
        echo "<td><button class='button1'><a href='adminupdate.php?updateid=".$row['AdminID']."'>Update</a></buttton></td>"; 
        echo "<td><button class='button1' onclick='confirmDelete(".$row['AdminID'].")'>Delete</button></td>";
        echo "</tr>";
}
    
}
else{
    echo "No results";
}

// Close the database connection
$con->close();

?>
</table>
</div>
</body>
</html>