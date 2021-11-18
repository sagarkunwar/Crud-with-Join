<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Display Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="customer.php" class="text-light" >Add Customer</a></button>
        <table class="table my-5">
        <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phonenumber</th>
                    <th scope="col">Operation</th>

                    <tbody>
                        <?php
                        
                        $sql="Select * from `customer`";
                        $result= mysqli_query($con,$sql);

                        if($result){
                            //$raw=mysqli_fetch_assoc($result);
                            while($raw=mysqli_fetch_assoc($result)){
                                $id=$raw['id'];
                                $name=$raw['name'];
                                $phone=$raw['phone'];
                                echo' <tr>
                                <th scope ="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$phone.'</td> 
                                <td>
                                <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                                <button class="btn btn-danger"><a href="deletecustomer.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                                </td>
                                </tr>
                                ';

                            }
                        }
                        
                        ?>
                    </tbody>

                </tr>
            </thead>

        </table>
    </div>
    
</body>
</html>