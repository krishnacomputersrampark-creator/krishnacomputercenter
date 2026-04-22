<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
?>

<h1>Dashboard</h1>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</p>

<a href="auth/logout.php">Logout</a>