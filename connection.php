<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "country";

$dsn = "mysql:host=$servername;dbname=$dbname;";
$pdo = new PDO('mysql:host=localhost;dbname=country', $username, $password);