<!DOCTYPE html>
<html lang="en">

<?php
include("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form name="form1" method="post" action="update_q.php">
            <table>
                <tr>
                    <td colspan="3"><strong>Update user's data</strong></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?php echo $rows['name']; ?>"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>:</td>
                    <td><input type="text" name="email" value="<?php echo $rows['email']; ?>"></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value="<?php echo $rows['username']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>