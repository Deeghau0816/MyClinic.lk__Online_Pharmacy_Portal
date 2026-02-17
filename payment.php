<?php

include 'adminconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$method = $_POST["method"];
$name=$_POST["name"];
$number=$_POST["number"];
$expire=$_POST["expire"];


$sql = "INSERT INTO payment (method, name, number, expire) 
VALUES('$method','$name','$number','$expire')";

if($con->query($sql))
{
    echo "<script>
        var userResponse = confirm('Record Added successfully. Do you want to be redirected to the Payment page?');
    </script>";
}
else
{
    echo "<script>
        alert('Add Unsucsesfull');
        </script>"; 

}

$con->close();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/title.png">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="payment.css">

</head>
<body>
    
    <div class="payment-container">
        <h2>Choose Your Payment Method</h2>

        
        <form action=" " method="POST">
            <h3>Add a Credit or Debit Card</h3>

           
            <div class="logos">
                <label>
                    <input type="radio" name="method" value="visa" required>
                    <img src="images/visa.png" alt="visa">
                    
                </label>
                <label>
                    <input type="radio" name="method" value="mastercard">
                    <img src="images/master.png" alt="master">
                    

                </label>
            </div>

            <label for="name">Cardholder's Name</label>
            <input type="text" id="name" name="name" placeholder="ex:- Navod Himsara" required>

            <label for="number">Card Number</label>
            <input type="text" id="number" name="number" maxlength="16" placeholder="ex:- (xxxx)(xxxx)(xxxx)(xxxx)" required>

            <label for="expire">Expiry Date (MM/YY)</label>
            <input type="text" id="expire" name="expire" maxlength="5" placeholder="ex:- DD/MM" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="ex:- xxx" required>

            <label for="amount">Amount (LKR)</label>
            <input type="number" id="amount" name="amount" required>

            <button type="submit"><i class="fa-solid fa-money-bills"></i> Pay Now with Card</button>

        </form>

        <br>
        <a href="Home-log.php"><button><i class="fa-solid fa-arrow-up-from-bracket"></i> Home page</button></a>

    </div>
    <script>src="payment.js"</script>
</body>
</html>
