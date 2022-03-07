<?php
session_start();

//initialize the cart
if (! (isset($_SESSION['cart']))){
    $_SESSION['cart'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">

    <!--    connect to bootstrap javascript-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <!--    connect to bootstrap css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>
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
                        <a class="nav-link disabled" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="gallery.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="sign_up.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="sign_in.php">Sign In</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="order.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!--    create the view cart, clear cart and logout buttons-->
<div class="container container-fluid">
    <div class="row m-2">
        <div class="col-md-4">
            <button class="btn btn-outline-success"><a href="view_cart.php">View Cart</a></button>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button class="btn btn-outline-dark"><a href="log_out.php">Log Out</a></button>
        </div>
    </div>
</div>
<div class="container container-fluid">
<h1 class="text-danger text-center">PRODUCTS</h1>
    
<!--create the items catalogue-->
<table class="table table-hover table-striped">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <?php
    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM products";
    $products = mysqli_query($connection, $selectQuery);

    foreach ($products as $product){
        $productName = $product["Name"];
        $productPrice = $product ["price"];
        $productId = $product ["pID"];

        echo "<tr>
            <td>$productName</td>
            <td>$productPrice</td>
            <td>
            <form action='products.php' method='GET'>
                <input type='text' name='qty' id='qty'>
                <input type='hidden' name='pID' value='$productId'>
                <input type='submit' name='btn_add' value='Add to cart'>
                <input type='submit' formaction='add_ordered_items.php' name='btn_add_db' value='Save'>
            </form>
            </td>
           
            
            </tr>";
    }

    ?>
</table>
</div>
<body>
</html>
