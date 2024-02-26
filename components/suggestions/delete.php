<?php
require '../../admin/connect.php';

session_start();

if (!(isset($_SESSION['admin']))) {
    echo "Unauthorized Access";
    return;
}

$id = $_GET['id'];
$DelSql = "DELETE FROM `suggestions` WHERE id=$id";
$res = mysqli_query($dbc, $DelSql);
if ($res) {
	header('location: ../../admin/suggestions.php');
} else {
	echo "Failed to delete";
}
?>