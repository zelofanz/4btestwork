<?php
include("connection.php");
error_reporting();

if (!empty($_GET['delete'])){ // Check if input isn't empty
	$id = $_GET['delete'];
	$stmt = $pdo->prepare("DELETE FROM country WHERE id=$id");
	$stmt->execute(); // Execute on server
	header('Location: index.php'); // Redirect to main page after deleted
}
?>