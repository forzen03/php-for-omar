<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include("config.php");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<body>
    <table width="500" border="1" cellspacing="0" cellpadding="3">>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['role']; ?></td>
                <td><a href="update.php?id=<?php echo $rows['id']; ?>">Update</td>
                <td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="admin_home.php">back to main page</a>
</body>

</html>