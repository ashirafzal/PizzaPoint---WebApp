<?php

    include '../connection/connection.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="http://localhost:81//PizzaApp/images/pizzapoint.jpg">
    <title>Register</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="../images/pizzapoint.jpg" height="28" alt="Pizza Point">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../cashier/cashier.php" class="nav-item nav-link active">Cashier</a>
                <a href="../orders/orders.php" class="nav-item nav-link">Orders</a>
                <a href="../prices/prices.php" class="nav-item nav-link">Prices</a>
                <a href="../products/products.php" class="nav-item nav-link">Products</a>
                <a href="../sales/sales.php" class="nav-item nav-link">Sales</a>
                <a href="../users/users.php" class="nav-item nav-link">Users</a>
                <a href="../register/register.php" class="nav-item nav-link">Register</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="../logout/logout.php" class="nav-item nav-link"> <img src="../images/user.png" width="30px" height="30px" class="rounded-circle" alt="Circular Image"> Logout ( logged in as <?php echo $_SESSION['username']?> )</a>
            </div>
        </div>
    </nav>
    <?php 
        if (isset($_POST['insert'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            //$password = password_hash($password, PASSWORD_DEFAULT);
    
            $sql = "insert into appuser(username,password,email) 
            VALUES ('".$username."','".$password."','".$email."')";
            
            $query=mysqli_query($con,$sql);
            if($query){
            echo '<div class="alert alert-success alert-dismissible fade show">
            User<strong> Registered </strong>successfully.
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show">
                Already a <strong> user </strong>registered on this email address try using another email address.
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>';
            }  
        }
    ?>
    <br/>
    <div class="container">
        <form style="height: 430px;" id="register" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="form-group">
                <label for="inputEmail">Username</label>
                <input type="text" name="username" class="form-control" id="inputEmail" placeholder="Username" required>
                <div class="invalid-feedback">Please enter a username.</div>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                <div class="invalid-feedback">Please enter your password to continue.</div>
            </div>
            <button style="margin-top:1rem;" type="submit" name="insert" class="btn btn-danger">REGISTER</button><br>
            <!--<a class="btn btn-danger btn-block" href="../cashier/cashier.php">BACK</a>-->
        </form>
    </div>
    <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../login/login.js"></script>
</body>
</html>