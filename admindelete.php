<?php

include 'adminconnect.php';

if(isset($_GET['deleteid'])){
   $AdminID=$_GET['deleteid'];

   $sql = "DELETE FROM admin1 WHERE AdminID='$AdminID'"; //delete products from database

   if($con->query($sql))
   {
    echo "Deleted Successfully";

    header('location:admindisplay.php');
   }

   else{
    echo "Not Success";
   }
}

?>