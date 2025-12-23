<?php
include('config.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users
WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['image'] = $row['image'];
    if ($row['role'] == 'admin') {
        header("Location: admin_home.php");
    } else {
        header("Location: user_home.php");
    }
} else {
    echo "Wrong username or password";
}
?>