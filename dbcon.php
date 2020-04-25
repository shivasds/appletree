<?php
$servername = "localhost";
$username = "anapplet_apple";
$password = "Password1982";
$db="anapplet_apple";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>