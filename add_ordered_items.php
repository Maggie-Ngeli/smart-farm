<?php
session_start();
//connect to the database to save
require_once "db_connection.php";
//check if the add to cart button has been clicked
if (isset($_POST["btn_add_db"])) {
    //start receiving data from add to cart form
    $userId=$_SESSION['userId'];
    $productId = $_SESSION['pID'];
    $quantity = $_SESSION['qty'];
    $product = "SELECT * FROM `products` WHERE pID= '$productId'";
    $result = mysqli_query($connection, $product);
    $productDetails = mysqli_fetch_assoc($result);
    $productName = $productDetails["Name"];


    //    insert order information into the database
    $order = "INSERT INTO `ordered_items`(`userId`, `productId`, `product_name`, `quantity`)
                                    VALUES ('$userId','$productId','$productName','$quantity')";
    $orderedItems = mysqli_query($connection, $order);
    if (!isset($orderedItems)){
        echo "values not inserted";
    }else{
        echo "<script>alert('You have successfully ordered the item.');window.location.href='order.php';</script>";
    }
}
