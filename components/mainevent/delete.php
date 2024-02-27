<?php
require '../../admin/connect.php';


session_start();

if (!(isset($_SESSION['admin']))) {
	echo "Unauthorized Access";
	return;
}

$id = $_GET['id'];
$DelSql = "DELETE FROM `main_events` WHERE eid=$id";
$res = mysqli_query($dbc, $DelSql);
if ($res) {
	header('location: ../../admin/events.php');
} else {
	echo "Failed to delete";
}
?>