<?php
$host = "localhost";
$user = "root";
$password = "Chayowo@25";
$database = "students";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
