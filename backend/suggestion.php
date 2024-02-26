<?php
session_start();

require '../admin/connect.php';
$table = "suggestions";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']); 
    $mobile =  mysqli_real_escape_string($dbc, $_POST['mobile']); // fix typo in variable name and add mysqli_real_escape_string
    $suggestion = mysqli_real_escape_string($dbc, $_POST['suggestion']);
    
    // Fix the SQL query syntax by adding single quotes around string values
    $query1 = "INSERT INTO `suggestions` (`id`, `name`, `email`, `mobilNo`, `suggestions`) 
               VALUES (NULL, '$name', '$email', '$mobile', '$suggestion')";

    $exe = mysqli_query($dbc, $query1);
    if ($exe) {
        echo "<script>alert(\"Your event has been sent for suggestion\")</script>";
        header('location: ../dist/index.php');
        exit(); // Add exit after header redirect
    } else {
        echo "Error: " . $query1 . "<br>" . mysqli_error($dbc); 
    }
    mysqli_close($dbc);
}

?>
