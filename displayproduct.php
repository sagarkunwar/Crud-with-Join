
<?php
include 'connection.php';
include 'displaycustomer.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displayproduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container my-5">
    <button class="btn btn-primary"><a href="addproduct.php" class="text-light" >Add Product</a></button>
    <table class="table my-5">

        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">ProductName</th>
            <th scope="col">Price</th>
            <th scope="col">Customer id</th>
            <th scope="col">Operation</th>

            </tr>
            <tbody>
                    <?php

                     $sql= "select * from `product`";
                    $result= mysqli_query($con,$sql);

                    if ($result){
                            while ($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $cid = $row ['customer_id'];

                            echo' <tr>
                            <th scope ="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$price.'</td> 
                            <td>'.$cid.'</td> 
                            <td>
                            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="deleteproduct.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>
                            </tr>
                            ';

                            }

                        }

                    ?>

            </tbody>

            
        </thead>


    </table>



    </div>
</body>
</html>