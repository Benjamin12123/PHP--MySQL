<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = $_POST["role"];

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $password, $role);

    if ($stmt->execute()) {
        if ($role == "trainer") {
            $trainer_id = $conn->insert_id;
            $conn->query("INSERT INTO trainers (id, specialty, bio) VALUES ($trainer_id, '', '')");
        }
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="nav">Register</div>

<div class="container">
    <form method="POST">
        <h2>Create Account!</h2>

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <select name="role">
            <option value="user">User</option>
            <option value="trainer">Trainer</option>
        </select>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>