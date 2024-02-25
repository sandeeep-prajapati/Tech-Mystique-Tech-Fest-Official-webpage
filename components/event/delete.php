<?php
require 'connect.php';

session_start();

if (!(isset($_SESSION['admin']))) {
	echo "Unauthorized Access";
	return;
}

$id = $_GET['id'];
$DelSql = "DELETE FROM `events` WHERE eid=$id";
$res = mysqli_query($dbc, $DelSql);
if ($res) {
	header('location: ../../events.php');
} else {
	echo "Failed to delete";
}
?>