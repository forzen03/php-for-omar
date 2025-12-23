<?php
include("config.php");
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$sql = "UPDATE users 
SET name = '$name', 
email = '$email', 
username = '$username' 
WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
echo "Update Successful<br>";
echo "<a href='update.php?id=$id'>Back</a><br>";
echo "<a href='users.php'>Back to List</a>";
} else {
echo "ERROR: " . mysqli_error($conn);
}
mysqli_close($conn);
?>