<?php
session_start();

require 'admin/connect.php';
$table = "users";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST['username'];
$password = $_POST['password'];


$query1 = "SELECT * FROM $table where email='$email' and password='$password'";
$exe = mysqli_query($dbc, $query1);
$exe1 = mysqli_num_rows($exe);
if ($exe1 > 0) {
	$row = $exe->fetch_assoc();
	$_SESSION['email'] = $row["email"];
	$_SESSION['pass'] = $row["pass"];
	$_SESSION['id'] = $row["id"];
	$_SESSION['Aaccess'] = "1";

	header('location: index.php');
} else {
	echo "<script>alert(\"Invalid Credentials\")</script>
	<br>
    <a href='index.php'>back to login</a>
	";
	;
}
mysqli_close($dbc);
}
?>