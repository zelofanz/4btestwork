<?php
include("connection.php");
error_reporting();

if (!empty($_GET['country'])){ // Check if input isn't empty
	$country = $_GET['country'];
	
	$sql = "INSERT INTO country (name) VALUES (:country)";
	$stmt = $pdo->prepare($sql); // Prepare SQL
	$stmt->bindParam(':country', $country); // bind variable
	$stmt->execute(); // Execute on server
	header('Location: index.php'); // Redirect to main page after form submitted
	
}
?>