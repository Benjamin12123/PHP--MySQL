<?php
session_start();
if (!isset($_SESSION["user_id"])) header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="nav">Dashboard</div>

<div class="container">
    <h2>Welcome!</h2>

    <a href="trainers.php"><button>Browse Trainers</button></a>
    <a href="logout.php"><button>Logout</button></a>
</div>

</body>
</html>