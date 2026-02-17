<?php

include 'adminconnect.php';

if(isset($_GET['deleteid'])){
   $PaymentID=$_GET['deleteid'];

   $sql = "DELETE FROM payment WHERE PaymentID='$PaymentID'";

   if($con->query($sql))
   {
    //echo "Deleted Successfully";

    header('location:paymentdisplay.php');
   }

   else{
    echo "Not Success";
   }
}

?>