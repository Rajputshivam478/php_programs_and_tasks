<?php
session_start();
$username = $_REQUEST['username'];
foreach ($_SESSION as $key => $value) {
    if ($username == $key) {
        $fname = $value[0];
        $lname = $value[1];
        $dob = $value[2];
        $email = $value[3];
        $pnumber = $value[4];
        $password = $value[6];
        $destination = $value[7];
    }
}

if (isset($_POST['update'])) {

    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password == $confirm_password) {
        foreach ($_SESSION as $key => $value) {
            if ($key == $username) {
                $_SESSION[$username] = array($fname, $lname, $dob, $email, $pnumber, $username, $new_password, $destination);
                header('location: display_data_using_session.php');
            }
        }
    } else {
        echo '<p style="padding:10px; margin:20px;  border:2px solid black;  text-align:center; color:red; font-size:36px;">password or confirm password not matched</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>

<body>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td><label for="password">Enter the old password</label></td>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <td><button type="submit" name="check">check</button></td>
            </tr>
    </form>
    <?php
    if (isset($_REQUEST['check'])) {
        $pass = $_REQUEST['pass'];
        if ($pass == $password) {
            ?>
            <form action="" method="post">
                <tr>
                    <td><label for="new_password">Enter your new password</label></td>
                    <td><input type="text" name="new_password"></td>
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm password</label></td>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="update">Update</button></td>
                </tr>
                <?php
        } else {
            echo '<p style="padding:10px; margin:20px;  border:2px solid black;  text-align:center; color:red; font-size:36px;">old password not matched</p>';
        }
    }
    ?>
    </form>
    </table>
</body>

</html>