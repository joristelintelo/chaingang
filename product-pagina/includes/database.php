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

$sql = "SELECT *, fietsnaam, fietsprijs, fietsbeschrijving, fietspecificatie, Fietsfoto FROM fietsen";
$result = $conn->query($sql);


$conn->close();

?>