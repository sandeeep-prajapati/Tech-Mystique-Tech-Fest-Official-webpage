<?php

session_start();

require '../../admin/connect.php';
$table = "events";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $description = mysqli_real_escape_string($dbc, $_POST['desc']); // fix typo in variable name
    $type = mysqli_real_escape_string($dbc, $_POST['type']);
    $time = mysqli_real_escape_string($dbc, $_POST['time']);   
    $date = mysqli_real_escape_string($dbc, $_POST['date']);

    $query1 = "INSERT INTO `main_events` (`eid`, `name`, `description`, `type`, `time`, `date`,`email`) VALUES (NULL, '$name', '$description', '$type', '$time', '$date','')";

    $exe = mysqli_query($dbc, $query1);
    if ($exe) {
        echo "<script>alert(\"Your event has been sent for suggestion\")</script>";
        header('location: ../../admin/events.php');
        exit(); // Add exit after header redirect
    } else {
        echo "Error: " . $query1 . "<br>" . mysqli_error($dbc); // Changed $sql to $query1
    }
    mysqli_close($dbc);
}


?> 