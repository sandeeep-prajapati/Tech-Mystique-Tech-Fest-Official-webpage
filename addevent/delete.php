<?php
require '../admin/connect.php';


session_start();

if (!(isset($_SESSION['admin']))) {
	echo "Unauthorized Access";
	return;
}

$id = $_GET['id'];
$token = $_GET['token'];
$DelSql = "DELETE FROM `tokenregistration` WHERE eid=$id";
$res = mysqli_query($dbc, $DelSql);
if ($res) {
	header('location: ../event_registration.php?id='.$id.'&token='.$token);
} else {
	echo "Failed to delete";
}
?>