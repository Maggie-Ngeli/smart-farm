<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="sign_up.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign_in.php">Sign In</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="sign_in.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!--create the signup form-->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
            <h1 class="text-dark">Register Here</h1>
            <form action="sign_up_handler.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" placeholder="Enter your email" class="form-control" id="email" placeholder="Enter your email address" name="email_address" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="text" class="form-control" id="phone_number" placeholder="Enter your phone number" name="phone_number" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pswd" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Repeat Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Repeat your password" name="rpt_pswd" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <input name="btn_sign_up" class="btn btn-danger" value="Register" type="submit"><br>
                <p>
                    Already a member? <a href="sign_in.php">Sign in</a>
                </p>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>
