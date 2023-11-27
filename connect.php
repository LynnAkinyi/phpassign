<?php
$host = "127.0.0.1"; // Typically "localhost"
$username = "root";
$password = "";
$database = "kca"; // The name of your database

$reg_no = $_POST['reg_no'];
$surname = $_POST['surname'];
$middle_name = $_POST['middle_name'];
$first_name = $_POST['first_name'];
$course = $_POST['course'];
$age = $_POST['age'];
$guardian = $_POST['guardian'];
$tel_no = $_POST['tel_no'];

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

