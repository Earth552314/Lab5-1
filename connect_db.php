<?php
$servername = "localhost";
$username = "Siraphop";
$password = "29042548sira";
$db = "Siraphop";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>