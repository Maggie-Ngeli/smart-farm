<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Placed Orders</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>

<body>
    <h1 class="text-danger text-center">Ordered Items</h1>
<table class="table table-hover table-striped">
    <tr>
        <th>Customer Name</th>
        <th>Email Address</th>
        <th>Product Name</th>
        <th>Quantity Ordered</th>

    </tr>
    <?php
    require_once "db_connection.php";
    $selectQuery = "SELECT users.name, users.email_address, ordered_items.product_name, ordered_items.quantity
                        FROM users
                        INNER JOIN ordered_items
                        ON users.userId = ordered_items.userId;";
    $users = mysqli_query($connection,$selectQuery);

    foreach ($users as $user){
        $userName = $user["name"];
        $userEmailAddress = $user["email_address"];
        $productName = $user ["product_name"];
        $quantity = $user ["quantity"];

        echo "<tr>
            <td>$userName</td>
            <td>$userEmailAddress</td>
            <td>$productName</td>
            <td>$quantity</td>
            
            </tr>";
    }
?>
</body>
</html>
