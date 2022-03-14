<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Landing Page</title>

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
<!--    create the  administrator user registration form-->
</div>
<div>
    <button name="logout" class="btn btn-outline-danger m-2 position-absolute "><a href="log_out.php">Log Out</a></button>

</div>
<h1 class="text-danger text-center">Add users here</h1>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="post" action="add_users_handler.php">
            <input class="form-control" name="name" placeholder="User full name" type="text"><br>
            <input class="form-control" name="email_address" placeholder="User email address" type="email"><br>
            <select class="form-control" name="user_type" id="user_type">
                <option value="">Select the user type</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br>
            <input class="form-control" name="phone_number" placeholder="User phone number" type="text"><br>
            <input class="form-control" name="pswd" placeholder="Create password" type="password"><br>
            <input class="form-control" name="rpt_pswd" placeholder="Repeat password" type="password"><br>
            <input name="btn_add" class="btn btn-danger btn-block" value="Add" type="submit">
            <a class="btn btn-outline-danger btn-block" href="view_users.php">View Registered Users</a>
            <a class="btn btn-outline-danger btn-block" href="placed_order.php">View Ordered Items</a>
        </form>
    </div>
    <div class="col-md-2"></div>

</div>

</body>
</html>
