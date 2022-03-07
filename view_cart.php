<?php
session_start();

//initialize the cart
if (! (isset($_SESSION['loggedInUser']))){
    $_SESSION['loggedInUser'] = 'btn_sign_in';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Cart</title>
    <!--    connect to bootstrap javascript-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <!--    connect to bootstrap css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <!--    connect to local ccs style sheet-->
    <link rel="stylesheet" href="assets/bootstrap/css/styles.css">
</head>
<body>
<!--create a navigation bar-->
<div class="top_div container-fluid m-0 p-0">
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <div class="container-fluid ">
            <a class="navbar-brand m-0 p-0" href="#">
                <img src="assets/aberdare.jpg" alt="Aberdare premium pork Logo"  style="width:110px;" class="rounded-pill m-auto">
            </a>
            <div class="container-fluid">
                <span class="navbar-text justify-content-center m-0 h1 text-light">ABERDARE PREMIUM PORK</span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav h5 m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="sign_up.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="sign_in.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="order.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<h1 class="text-center text-danger">View Ordered Items</h1>
</body>
</html>
<table class="table table-hover table-striped text-center">
    <tr>
        <td>Item</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>SubTotal</td>
    </tr>
    <?php

    require_once "db_connection.php";
    foreach ($_SESSION['cart'] as $key => $val){
        $sql = "SELECT * FROM `products` WHERE pID ='$key'";
        $results=mysqli_query($connection,$sql) or die("bad SQL:$sql");
        $row = mysqli_fetch_assoc($results);

        $sub = $val*$row['price'];
        $grand =+ $sub;
        echo "
        <tr>
        <td>{$row['Name']}</td>
        <td>{$row['price']}</td>
        <td>$val</td>
        <td>Sh.$sub</td>
        </tr>
";

    }
    ?>
</table>
