<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$db_name = "pig_farm_management_system";
//connect to the database
$connection = mysqli_connect($host, $user, $pass, $db_name);
//check if the connection failed
if (!isset($connection)) {
    die("DB connection failed");
}