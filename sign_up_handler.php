<?php
session_start();
//header("location:sign_in.php");
//check if the button has been clicked
if (isset($_POST["btn_sign_up"])) {
    //start receiving data from form
    $name=$_POST["name"];
    $email = $_POST["email_address"];
    $phoneNumber = $_POST["phone_number"];
    $passWord = $_POST["pswd"];
    $repeatPassWord = $_POST["rpt_pswd"];
    //connect to the database to save
    require_once "db_connection.php";
    //prepare the registration validation query
    //validate if the input email exists on the database and that password and repeat password are similar
    $s = "SELECT * FROM `users` WHERE email_address = '$email'";
    $results = mysqli_query($connection, $s);
    $num = mysqli_num_rows($results);
//    mysqli_select_db($connection, $results);
    if ($num > 0) {
       echo "Email already exists";
    }elseif ($passWord != $repeatPassWord){
       echo "passwords doesn't match";
    }else {
        $signUp = "INSERT INTO `users`(`userId`, `name`, `email_address`, `user`, `phone number`, `password`, `repeat_password`)
                                     VALUES (null ,'$name','$email','user','$phoneNumber','$passWord','$repeatPassWord')";
         mysqli_query($connection, $signUp);
        $_SESSION['success']  = "Sign_up was successful!!";
        header("location:sign_in.php");
    }
}  else {
    header("location:sign_up.php?<?php echo 'Sign_up was unsuccessful'?>");
}
