<?php
$token = $_GET['token'];
$id = $_GET['id'];

require '../admin/connect.php';

// Assuming your table structure is:
// tokenregistration(id, eid, token)

// Prepare the INSERT statement
$query = "INSERT INTO tokenregistration (eid, token) VALUES (?, ?)";
$stmt = $dbc->prepare($query);

// Bind parameters
$stmt->bind_param("is", $id, $token);

// Execute the statement
if ($stmt->execute()) {
    echo "Token registration successful!";
    header('location: ../event_registration.php?token='.$token.'');
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$dbc->close();


?>