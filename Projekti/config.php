<?php
$conn = new mysqli("localhost", "root", "", "fitness_app");
if ($conn->connect_error) die("DB connection error: " . $conn->connect_error);
?>