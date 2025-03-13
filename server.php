<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "inventorysystem2k25";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
