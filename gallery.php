<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
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
                        <a class="nav-link active" href="gallery.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign_up.php">Sign Up</a>
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

<!--Create the gallery cards-->
    <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img
                                    src="assets/images/pork.jpg"
                                    class="card-img-top"
                                    alt="pork image"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Pork</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk
                                    of the card's content.
                                </p>
                                <a href="sign_in.php" class="btn btn-danger">Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img
                                    src="assets/images/bacon.jpg"
                                    class="card-img-top"
                                    alt="Bacon"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Bacon</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk
                                    of the card's content.
                                </p>
                                <a href="sign_in.php" class="btn btn-danger">Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img
                                    src="assets/images/ham.jpg"
                                    class="card-img-top"
                                    alt="Ham"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Ham</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk
                                    of the card's content.
                                </p>
                                <a href="sign_in.php" class="btn btn-danger">Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img
                                    src="assets/images/sausages.jpg"
                                    class="card-img-top"
                                    alt="Pork sausages"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Sausage</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk
                                    of the card's content.
                                </p>
                                <a href="sign_in.php" class="btn btn-danger">Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img
                                    src="assets/images/sow.jpg"
                                    class="card-img-top"
                                    alt="Female pig"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Sow</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk
                                    of the card's content.
                                </p>
                                <a href="sign_in.php" class="btn btn-danger">Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img
                                    src="assets/images/piglets.jfif"
                                    class="card-img-top"
                                    alt="Piglets"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Piglets</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk
                                    of the card's content.
                                </p>
                                <a href="sign_in.php" class="btn btn-danger">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
