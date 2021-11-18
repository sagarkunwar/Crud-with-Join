<?php
include 'connection.php';
if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $price =$_POST['price'];
    $cid =$_POST['customer_id'];

    $sql= "insert into `product` (name,price,customer_id) values ('$name',$price,$cid) ";
    $result = mysqli_query($con, $sql);

    if ($result){
        header('location:displayproduct.php');
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
    <title>display product</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container my-5">
            <form method="post">
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="name" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter Price of Product" name="price" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Customer id</label>
                    <input type="text" class="form-control" placeholder="Enter Customer ID" name="customer_id" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
            </form>
        </div>
    
</body>
</html>