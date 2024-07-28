<?php
    require '../connection.php';
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql= "SELECT * FROM product WHERE id='$id'";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_array($result);
        
        $pname= $row['product_name'];
        $pprice= $row['product_price'];
        $del_charge=250;
        $total_price= $pprice+$del_charge;
        $pimage= $row['product_image'];
    }
    else{
        echo 'No Product Found!!!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Order</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Work-Flow</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5">
                    <h2 class="text-center p-2 text-primary">Fill the details below to complete your order:</h2>
                    <h3>Product Details:</h3>
                    <table class="table table-bordered" width="500px">
                        <tr>
                            <th>Product Name:</th>
                            <td><?= $pname?></td>
                            <td rowspan="4" class"text-center"><img src="<?= $pimage; ?>" width=200""></td>
                        </tr>
                        <tr>
                            <th>Product Price:</th>
                            <td><?= $pprice?></td>
                        </tr>
                        <tr>
                            <th>Delivery Charge:</th>
                            <td><?= $del_charge?></td>
                        </tr>
                        <tr>
                            <th>Total Price:</th>
                            <td><?= number_format($total_price);?></td>
                        </tr>
                    </table>
                    <h4>Enter Delivery Details:</h4>
                    <form action="pay.php" method="post" accept-charset="utf-8">
                        <input type="hidden" name="product_name" value="<?= $pname;?>">
                        <input type="hidden" name="product_price" value="<?= $pprice;?>">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-danger btn-lg" Value="Click to pay: <?= number_format($total_price);?>" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    
</body>
</html>