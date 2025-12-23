<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <center>
        <h2>Login</h2>
        <table>
            <form method="post" action="checklogin.php">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </form>
        </table>
        <p>
            Don't have an account?
            <a href="register.php">Create New Account</a>
        </p>
    </center>
</body>

</html>