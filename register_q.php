<?php
include("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$imageName = $_FILES['image']['name'];
$tmpName = $_FILES['image']['tmp_name'];
move_uploaded_file($tmpName, "uploads/" . $imageName);
$uname = $_POST['uname'];
$password = $_POST['password'];
$role = "user";
$sql = "INSERT INTO users (name, email,image, username,password,role) VALUES ('$name',
'$email','$imageName', '$uname','$password','$role')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Successful<br>";
    echo "<a href='login.php'>Back to login page</a>";
} else {
    echo "ERROR: " . mysqli_error($conn);
}
mysqli_close($conn);
?>