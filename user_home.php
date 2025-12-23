<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Page</title>
</head>

<body>
    <h2>User Dashboard</h2>
    <p>Welcome <?php echo $_SESSION['username']; ?> </p>
    <p>
        <img src="uploads/<?php echo $_SESSION['image']; ?>"
            width="120"
            style="border-radius:50%;">
    </p>
    <p>This is the USER screen.</p>
    <a href="logout.php">Logout</a>
</body>

</html>