<?php
include("connection.php");
error_reporting();

if (!empty($_GET['delete'])){ // Check if input isn't empty
	$id = $_GET['delete'];
	$stmt = $pdo->query("DELETE FROM country WHERE id=$id");
	header('Location: index.php'); // Redirect to main page after deleted
}
?>