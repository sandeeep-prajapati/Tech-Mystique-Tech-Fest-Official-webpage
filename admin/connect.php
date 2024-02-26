<?php 
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbase = "enigma";

$dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
    or die("Unable to select database");

?>