<?php
session_start();
require "admin/connect.php";
if (!isset($_SESSION['admin'])) {
    header('location: index.php');
} 
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Check if email already exists in the externalparticipants table
    $checkQuery = "SELECT COUNT(*) FROM externalparticipents WHERE email=?";
    $checkStmt = mysqli_prepare($dbc, $checkQuery);
    mysqli_stmt_bind_param($checkStmt, "s", $email);
    mysqli_stmt_execute($checkStmt);
    mysqli_stmt_bind_result($checkStmt, $count);
    mysqli_stmt_fetch($checkStmt);
    mysqli_stmt_close($checkStmt);

    if ($count > 0) {
        echo "Email already exists.";
        exit;
    }

    // Generate a random string
    $token = md5(uniqid($email, true));

    // Prepare the SQL statement
    $query = "INSERT INTO `externalparticipents` (`id`, `name`, `contact`, `email`, `token`) VALUES (NULL, ?, ?, ?, ?)";
    
    // Initialize a prepared statement
    $stmt = mysqli_prepare($dbc, $query);
    $_SESSION['token'] = $token;

    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $mobile, $email, $token);
    
    // Execute the statement
    $res = mysqli_stmt_execute($stmt);
    
    if ($res) {
        header('location: token.php');
        exit(); // Terminates the script immediately after redirection
    } else {
        $fmsg = "Failed to insert data.";
        echo $fmsg;
    }
} 
else {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate your Token here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3"></div>
        <div class="col-md-6 col-sm-12 col-lg-6 bg-dark text-white p-4 m-4">
            <form action="" method="post">
                <h2 class="text-center text-white">Generate Your token</h2>
                <p class="text-danger">insert your all credentials correctly and take a screenshot of your generated token</p>
                <label for="Enter your name">Enter your name</label>
                <input type="text" class="form-control" name="name" placeholder="" required>
                <label for="Enter your email">Enter your email</label>
                <input type="email" class="form-control" name="email" placeholder="" required>
                <label for="Enter your mobile number">Mobile Number</label>
                <input type="number" class="form-control" name="mobile" placeholder="" required>
                <br>
                <input type="submit" placeholder="Submit" class="bg-success text-white form-control">
            </form>
        </div>
        <div class="col-md-3 col-lg-3"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
?>
