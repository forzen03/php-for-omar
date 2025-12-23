<?php
include("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Delete user</title>
</head>

<body>
    <center>
        <h2>Are you sure you want to delete this record?</h2>
        <p><strong>name:</strong> <?php echo $rows['name']; ?></p>
        <p><strong>email:</strong> <?php echo $rows['email']; ?></p>
        <p><strong>username:</strong> <?php echo $rows['username']; ?></p>
        <form method="post" action="delete_q.php">
            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            <input type="submit" value="Delete">
        </form>
        <br>
        <a href="users.php">Cancel</a>
    </center>
</body>

</html>