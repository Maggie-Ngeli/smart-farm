<?php

//Check if the delete link has been clicked
if (isset($_GET["u_id"])) {
    $userId = $_GET["u_id"];

    //connect to the db to delete
    require_once "db_connection.php";
    //prepare to delete query
    $deleteQuery = "DELETE FROM `users` WHERE id='$userId'";

    //use mysqli_query () to execute the delete query
    $delete = mysqli_query($connection, $deleteQuery);

    //check if the deletion was successful
    if (isset($delete)) {
        //redirect back to view_users.php to see if changes actually occurred
        header("location:view_users.php");
    } else {
        die ("user deletion failed");
    }
}
