<?php
session_start();

//initialize the cart
if (!(isset($_SESSION['cart']))){
    $_SESSION ['cart']= 'btn_add';
}

require_once "db_connection.php";
//prepare the purchase validation statement
if (isset($_GET['btn_add'])){
    $pID = $_GET ["pID"];
    $quan = $_GET ["qty"];
    $_SESSION['pID']= $pID;
    $_SESSION['qty'] = $quan;

    if ($quan>0 &&filter_var($quan,FILTER_VALIDATE_INT)){
        if (isset($_SESSION ['cart'] [$pID])){
            $_SESSION ['cart'] [$pID] += $quan;
        }else {
            $_SESSION ['cart'] [$pID] = $quan;
        }
        header("location:order.php");
    }else{
        $out = "Bad Input";
    }
}

//print out items as they are being clicked on
//echo "<pre>";
//print_r($_SESSION['cart']);
//echo "<pre>";