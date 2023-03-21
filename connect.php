<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "pariwisata";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>