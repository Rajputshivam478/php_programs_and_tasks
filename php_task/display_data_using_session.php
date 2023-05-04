<?php
    session_start();
    if (isset($_REQUEST['submit'])) {
        if ($_REQUEST['password'] == $_REQUEST['c_password']) {
            $f_name = $_REQUEST['f_name'];
            $l_name = $_REQUEST['l_name'];
            $dob = $_REQUEST['dob'];
            $email = $_REQUEST['email'];
            $p_number = $_REQUEST['p_number'];
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

            foreach($_SESSION as $key => $value) {
                if ($key == $username) {
                    echo "username already exists";
                } else {
                    $_SESSION[$username] = array($f_name, $l_name, $dob, $email, $p_number, $username, $password);
                    header('location: display_session_data.php');
                }
            }

        } else {
            echo "password and confirm password doesn't match...";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session signup</title>
</head>

<body>
    <h1 align="center">Sign up Form </h1>
    <table cellspacing=10px; align="center">
        <form action="" method="post">
            <tr>
                <td>
                    <label for="f_name">first name :</label>
                </td>
                <td>
                    <input type="text" name="f_name" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="l_name">last name :</label>
                </td>
                <td>
                    <input type="text" name="l_name" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">email :</label>
                </td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="p_number">phone number :</label>
                </td>
                <td>
                    <input type="number" name="p_number" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">D.O.B :</label>
                </td>
                <td>
                    <input type="date" name="dob" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">username :</label>
                </td>
                <td>
                    <input type="text" name="username" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">password :</label>
                </td>
                <td>
                    <input type="password" name="password" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="c_password">confirm password :</label>
                </td>
                <td>
                    <input type="password" name="c_password" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>