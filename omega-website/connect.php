<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bible";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }
?>