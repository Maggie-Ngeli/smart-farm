<?php
    //check if the update link has been clicked
    if (isset($_GET["u_id"])){
        $receivedUserName = $_GET["u_name"];
        $receivedUserEmail = $_GET["u_email"];
        $receivedUserType = $_GET ["u_type"];
        $userId = $_GET["u_id"];
     }else {
            header("location:view_users.php");
        }

    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Voters</title>
        <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
        <script src="assets/bootstrap/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    </head>

    <body>
    <h1 class="text-info text-center">Updating User Information</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="update_handler.php" method="post">
                <input readonly class="form-control" value="<?php echo $receivedUserName;?>" name="name" placeholder="User full name" type="text"><br>
                <input readonly class="form-control" value="<?php echo $receivedUserEmail;?>" name="email_address" placeholder="User email address" type="email"><br>
                <select class="form-control" name="user_type" id="user_type">
                    <option value="<?php echo $receivedUserType; ?>">
                        <?php echo $receivedUserType; ?>
                    </option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select><br>
                <input name="btn_update" class="btn btn-danger btn-block" value="Update" type="submit">
                <a class="btn btn-outline-danger btn-block" href="view_users.php">Back</a>
                <input name="u_id" value="<?php echo $userId; ?>" type="hidden">
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    </body>
    </html>

