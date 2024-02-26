<?php
// session_start();

// require 'admin/connect.php';
// $table = "events";
// if($_SERVER["REQUEST_METHOD"] == "POST"){
// $name = $_POST['name'];
// $discription = $_POST['discription'];
// $type = $_POST['type'];
// $time = $_POST['time'];

// $query1 = "INSERT INTO `events` (`eid`, `name`, `description`, `type`, `time`, `date`, `image`) VALUES (NULL, $name, $discription, $type, '$time', '', '');";
// if ($dbc->query($query1) === TRUE) {
// 	echo "<script><alert>your event sent for suggestion</alert></script>";
// 	header('location: index.php');
//   } else {
// 	echo "Error: " . $sql . "<br>" . $dbc->error;
//   }

// $exe = mysqli_query($dbc, $query1);
// if ($exe) {
// } else {
// 	echo "<script>alert(\"Invalid Credentials\")</script>";
// }
// mysqli_close($dbc);
// }
session_start();

require 'admin/connect.php';
$table = "events";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $description = mysqli_real_escape_string($dbc, $_POST['discription']); // fix typo in variable name
    $type = mysqli_real_escape_string($dbc, $_POST['type']);
    $time = mysqli_real_escape_string($dbc, $_POST['time']);

    $query1 = "INSERT INTO `events` (`eid`, `name`, `description`, `type`, `time`, `date`, `image`) VALUES (NULL, '$name', '$description', '$type', '$time', '', '')";

    $exe = mysqli_query($dbc, $query1);
    if ($exe) {
        echo "<script>alert(\"Your event has been sent for suggestion\")</script>";
        header('location: index.php');
        exit(); // Add exit after header redirect
    } else {
        echo "Error: " . $query1 . "<br>" . mysqli_error($dbc); // Changed $sql to $query1
    }
    mysqli_close($dbc);
}


?> 