<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Feedbacks</title>
  <link rel="icon" type="image/jpg" href="images/title.png">
  <link rel="stylesheet" type="text/css" href="feedbackdis.css">
 
<script>
function confirmDelete(FeedbackID) {
    
    if (confirm("Are you sure you want to permanantly delete this feedback?")) {
        window.location.href = 'feedbackdelete.php?deleteid=' + FeedbackID;
    }
    return false;
}
</script>
</head>

<body>

<section></section>
 <div class = "container">
 
 
 
 <a href="feedbackpage.php " class="back-button">← Back to Feedback Page</a>
 <h1>Feedback Records</h1>




 <table>
   
 <tr>

    <th colspan="2">Feedback ID</th>
    <th colspan="2">Name</th>
    <th colspan="2">Email</th>
    <th colspan="2">Message</th>
    <th colspan="5">Action</th>
    
</tr>

<?php
include 'feedbackconnect.php';

$sql = "SELECT * FROM feedback5";

$result = $con->query($sql);

if($result->num_rows>0)
{   
    
    
    while($row=$result->fetch_assoc())
    {       
        echo "<tr>";
        echo "<td>".$row['FeedbackID']."</td>";
        echo "<td></td>";
        echo "<td>".$row['Name']."</td>"; 
        echo "<td></td>";
        echo "<td>".$row['Email']."</td>"; 
        echo "<td></td>";
        echo "<td>".$row['Message']."</td>"; 
        echo "<td></td>";
        echo "<td><button class='button1'><a href='feedbackupdate.php?updateid=".$row['FeedbackID']."'>Edit</a></buttton></td>";
        echo "<td><button class='button1' onclick='confirmDelete(".$row['FeedbackID'].")'>Delete</button></td>";
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