<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parkir";

// Create connection
$koneksi = new mysqli($servername, $username, $password,$database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
else{
  
}
?>