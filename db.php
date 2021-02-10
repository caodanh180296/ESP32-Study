<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "id14240645_esp_data";
// REPLACE with Database user
$username = "id14240645_caodanh1802";
// REPLACE with Database user password
$password = "mydreaminBosch123456.";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>