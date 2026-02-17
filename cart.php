<?php //connect with cart table via the config.php file

include 'config.php';

if(isset($_POST['updating'])){
   $update_value = $_POST['update_quantity'];

   //getting updating ID
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE cartID = '$update_id'"); //updating to that each product
   
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE cartID = '$remove_id'"); //delete product
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/jpg" href="images/title.png">
   <title>shopping cart</title>
<!--Css styles-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="cart.css">

</head>

<body>

<?php include 'cartconnect.php'; ?><!--connect the "cart" table and "products" table--> 

<!--Body-->
<div class="cart">

<section class="shopping-cart">

<br><br><br>
   <h1 class="cart-head">shopping cart</h1>
<br><br>
   <table><!--table for show cart-->

      <thead>
         <th>Image</th>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total price</th>
         <th class="action">Action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>
         
            <!--Show cart details-->
         <tr>
            <td><center><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></center></td>
            <td><center><?php echo $fetch_cart['name']; ?></center></td>
            <td><center>Rs. <?php echo number_format($fetch_cart['price']); ?> /=</center></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['cartID']; ?>" >
                  <center><input class="quantity" type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input class="update" type="submit" value="Update" name="updating"></center>
               </form>   

            </td>
            <td><center> Rs. <?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?> /=</center></td>
            <td><center><a href="cart.php?remove=<?php echo $fetch_cart['cartID']; ?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></center></td>
         </tr>

         <?php

            $sub_total = $fetch_cart['price'] * $fetch_cart['quantity'];  //calculation
            $grand_total += $sub_total; 
           
         };
      };
         ?>
         <tr class="table-bottom">
            <td></td>
            <td colspan="3"><center>Final Amount</center></td>
            <td><center>Rs.<?php echo $grand_total; ?> /=</center></td>
            <td><center><a href="cart.php?delete_all"  class="delete-btn"> <i class="fas fa-trash"></i> Delete all </a></center></td>
         </tr>
      
      </tbody>

   </table>

   <div class="checkout-btn">
      <button class="btn" onclick="return confirm_go()" >Confirm</button>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="cart.js"></script>

</body>
</html>