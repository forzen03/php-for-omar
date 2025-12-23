<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
</head>

<body>
    <h2>Admin Dashboard</h2>
    <p>Welcome Admin <?php echo $_SESSION['username']; ?> </p>
    <p>This is the ADMIN screen.</p>
    <a href="logout.php">Logout</a>
    <a href="users.php">go to users</a>
</body>

</html>