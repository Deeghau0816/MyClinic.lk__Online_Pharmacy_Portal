<?php
    session_start();
    session_destroy(); //if clicks on log out, user log out from the website
    header("Location:Home.php")
 ?>
