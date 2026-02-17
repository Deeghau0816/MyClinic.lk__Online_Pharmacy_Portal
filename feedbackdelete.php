<?php

include 'feedbackconnect.php';

if(isset($_GET['deleteid'])){
   $FeedbackID=$_GET['deleteid'];

   $sql = "DELETE FROM feedback5 WHERE FeedbackID='$FeedbackID'";

   if($con->query($sql))
   {
    //echo "Deleted Successfully";

    header('location:feedbackdisplay.php');
   }

   else{
    echo "Not Success";
   }
}

?>