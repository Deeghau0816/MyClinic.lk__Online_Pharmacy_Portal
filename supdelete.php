<?php

include 'adminconnect.php';

if(isset($_GET['deleteid'])){
   $SupID=$_GET['deleteid'];

   $sql = "DELETE FROM customersup WHERE SupID='$SupID'";

   if($con->query($sql))
   {
    //echo "Deleted Successfully";

    header('location:supdisplay.php');
   }

   else{
    echo "Not Success";
   }
}

?>