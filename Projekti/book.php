<?php
session_start();
require 'config.php';

if (!isset($_SESSION["user_id"])) {
    die("Please login first.");
}

$trainer_id = $_GET["trainer_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    $date = $_POST["session_date"];
    $notes = $_POST["notes"];

    $stmt = $conn->prepare("INSERT INTO bookings (user_id, trainer_id, session_date, notes)
                            VALUES (?,?,?,?)");
    $stmt->bind_param("iiss", $user_id, $trainer_id, $date, $notes);
    $stmt->execute();

    $message = "Booking confirmed!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="nav">Book a Session</div>

<div class="container">
    <h2>Schedule with Trainer</h2>

    <?php if (!empty($message)) echo "<p style='color:green;'>$message</p>"; ?>

    <form method="POST">
        <label>Date & Time:</label>
        <input type="datetime-local" name="session_date" required>

        <label>Notes:</label>
        <textarea name="notes"></textarea>

        <button type="submit">Confirm Booking</button>
    </form>
</div>

</body>
</html>