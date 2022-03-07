<?php
session_start();

//check if the sign_in button has been clicked
if (isset($_POST["btn_sign_in"])) {
    //start receiving data from form
    $emailAddress = $_POST["email"];
    $passWord = $_POST["pswd"];
    $remember = $_POST["remember"];

    //connect to the database to save
    require_once "db_connection.php";

    //prepare the login validation query
    $select = "SELECT * FROM `users` WHERE `email_address`='$emailAddress' && `password`='$passWord'";
    $results = mysqli_query($connection, $select);
    $num = mysqli_num_rows($results);

    // check if user has been found (if equal to 1 user has been found)
    if($num == 1){

        // check if user is an admin or normal user
        $logged_in_user = mysqli_fetch_assoc($results);
        $userId = $logged_in_user["id"];
        if ($logged_in_user['user'] == 'admin') {
            $_SESSION ['id'] = $userId;
            header("location: landing.php?<?php echo 'login successful'?>");
        }else{
            $_SESSION ['id'] = $userId;
            header("location: order.php?<?php echo 'login successful'?>");
        }
    }else{
        header("location:sign_in.php?error=1");
    }
}else{
    header("location:index.php") ;}