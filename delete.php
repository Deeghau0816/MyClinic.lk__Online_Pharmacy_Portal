<?php

    $con= mysqli_connect("localhost", "root", "");
    $db=mysqli_select_db($con, 'users');

    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        $query="DELETE FROM table1 WHERE id='$id' ";
        $run=mysqli_query($con, $query);

        if($run){
            echo '<script> alert("Data deleted"); </script>';
            header("location: Home.php");
        }else{
            echo '<script> alert("Data not deleted"); </script>';
        }
    }
    


?>