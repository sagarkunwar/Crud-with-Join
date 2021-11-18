<?php
include 'connection.php';
if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `customer`where id=$id";
    $result= mysqli_query($con,$sql);

    if($result){
        header('location:displaycustomer.php');
    }else{
        die(mysqli_error($con));
    }

}

?>