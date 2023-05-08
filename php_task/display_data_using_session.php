<?php require('sending_session_data.php'); ?>
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
                    <input type="text" name="f_name" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="l_name">last name :</label>
                </td>
                <td>
                    <input type="text" name="l_name" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">email :</label>
                </td>
                <td>
                    <input type="email" name="email" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="p_number">phone number :</label>
                </td>
                <td>
                    <input type="number" name="p_number" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">D.O.B :</label>
                </td>
                <td>
                    <input type="date" name="dob" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">username :</label>
                </td>
                <td>
                    <input type="text" name="username" id="" required> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">password :</label>
                </td>
                <td>
                    <input type="password" name="password" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="c_password">confirm password :</label>
                </td>
                <td>
                    <input type="password" name="c_password" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </form>
    </table>
    <br><br><br><br>
    <table border="1" cellpadding="5px" align="center">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>D.O.B</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Username</th>
            <th>Password</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        <?php include('show_session_data.php')?>
    </table>
</body>

</html>