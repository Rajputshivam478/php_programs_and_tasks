<?php
session_start();
if (isset($_REQUEST['login'])) {
    $_SESSION['uname'] = $_REQUEST['uname'];
    $_SESSION['pass'] = $_REQUEST['pass'];
    if (isset($_SESSION['uname']) && isset($_SESSION['pass'])) {
        if (isset($_SESSION['username'])) {
            if ($_SESSION['uname'] == $_SESSION['username'] && $_SESSION['pass'] == $_SESSION['password']) {
                echo "<script>location.href='session_welcome.php';</script>";
            } else {
                echo "Please enter correct username and password..</script>";
            }
        } else {
            echo "Please enter correct username and password..</script>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session login</title>
</head>

<body>
    <h1>Login form</h1>
    <form action="" method="post">
        <label for="uname">Enter the username :</label>
        <input type="text" name="uname" id="">
        <br><br>
        <label for="pass">Enter the password :</label>
        <input type="password" name="pass" id="">
        <br><br>
        <input type="submit" name="login">
    </form>
    <p>Don't have an account<a href="session_signup.php"> Signup</a></p>
</body>

</html>