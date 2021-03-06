<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-danger text-center">Registered Users</h1>
<table class="table table-hover table-striped">
    <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>User Type</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM users";
    $users = mysqli_query($connection, $selectQuery);

    foreach ($users as $user){
        $userName = $user["name"];
        $userEmailAddress = $user["email_address"];
        $userType = $user ["user"];
        $userId = $user ["userId"];

        echo "<tr>
            <td>$userName</td>
            <td>$userEmailAddress</td>
            <td>$userType</td>
            <td><a class='btn btn-danger' href='delete.php?u_id=$userId'>Delete</a></td>
            <td><a class='btn btn-success' href='update.php?u_id=$userId&&u_name=$userName&&u_email=$userEmailAddress&&u_type=$userType'>Update</a></td>
            
            </tr>";
    }

    ?>
</table>
</body>
</html>
