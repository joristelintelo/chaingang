<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chaingang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *";
$result = $conn->query($sql);

?>