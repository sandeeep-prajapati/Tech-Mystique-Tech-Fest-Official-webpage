<?php
session_start();

require 'connect.php';
$table = "admin";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST['username'];
$password = $_POST['password'];


$query1 = "SELECT * FROM $table where email='$email' and pass='$password'";
$exe = mysqli_query($dbc, $query1);
$exe1 = mysqli_num_rows($exe);
if ($exe1 > 0) {

	$row = $exe->fetch_assoc();
	$_SESSION['email'] = $row["email"];
	$_SESSION['pass'] = $row["pass"];
	$_SESSION['id'] = $row["id"];
	$_SESSION['admin'] = $row["isaccess"];
	if ($row["Access"] == "") {
		$_SESSION['Aaccess'] = "0";
	}
	header('location: home.php');
} else {
	echo "<script>alert(\"Invalid Credentials\")</script>";
}
mysqli_close($dbc);
}
?>