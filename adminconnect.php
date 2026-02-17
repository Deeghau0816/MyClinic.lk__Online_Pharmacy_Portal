<?php

// Create a new MySQLi connection to the database
$con = new mysqli("localhost","root","","users");

if($con->connect_error)
{
   die("Connection falied".$con->connect_error);
}


?>
