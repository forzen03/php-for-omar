<?php
include("config.php");
$id = $_POST['id'];
$sql = "DELETE FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Record Deleted Successfully<br>";
    echo "<a href='users.php'>Back to List</a>";
} else {
    echo "ERROR: " . mysqli_error($conn);
}
mysqli_close($conn);
?>