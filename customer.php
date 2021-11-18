<?php
include 'connection.php';
if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $mobilenumber=$_POST['phone'];

    $sql= "insert into `customer` (name,phone) values ('$name','$mobilenumber') ";
    $result= mysqli_query($con, $sql);
    if($result){
        header('location:displaycustomer.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>validation</title>
</head>
<body>
<div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter Your MobileNumber" name="phone" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
    </div>
</body>
</html>