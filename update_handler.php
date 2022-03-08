<?php
//check if the update button has been clicked
if (isset($_POST["btn_update"])){
    $updatedUserType =$_POST["user_type"];
    $userId = $_POST["u_id"];

    //connect to the db to post updates
    require_once "db_connection.php";

    //insert the updated data into the database
    $updateQuery = "UPDATE `users` SET `user`='$updatedUserType' WHERE userId=$userId";

    //use mysqli_query() to execute the update query
    $update = mysqli_query($connection,$updateQuery);
    //Check if the update was successful
    if (isset($update)){
        header("location:view_users.php");
    }else{
        echo "<script>alert('User details update failed')</script>";
    }
}


