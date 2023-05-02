<?php
session_start();
    if (isset($_REQUEST['submit'])) {
        if($_REQUEST['password'] == $_REQUEST['c_password'])
        {
            $_SESSION['username'] = $_REQUEST['username'];
            $_SESSION['password'] = $_REQUEST['password'];
            echo "Sign Up succesfully go to <a href=\"session_login.php\">login page</a>";
        }
        else
        {
            echo "Password and Confirm password not match please re-submit the form..";
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