<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "form_data"; 

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$handins = $_POST['handins'];
$message = $_POST['message'];
$targetDir = "uploads/";
if (!is_dir($targetDir)) {
  mkdir($targetDir, 0755, true);
}

$imageName = basename($_FILES["image"]["name"]);
