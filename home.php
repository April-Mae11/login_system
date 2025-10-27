<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="home-bg">
    <div class="dashboard">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <div class="cards">
            <div class="card">Profile</div>
            <div class="card">Settings</div>
            <div class="card">Stats</div>
        </div>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
