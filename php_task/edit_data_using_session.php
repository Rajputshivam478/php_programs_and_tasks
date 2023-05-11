<?php
if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $pnumber = $_REQUEST['pnumber'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $destination = $_REQUEST['destination'];
}
include 'edit_session_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1 align="center">Update Form </h1>
    <form action="" method="post">
        <table cellspacing="10px;" align="center">
            <tbody>
                <tr>
                    <td>
                        <label for="username">username :</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="" value=<?php echo $username; ?> disabled="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="f_name">first name :</label>
                    </td>
                    <td>
                        <input type="text" name="f_name" id="" value=<?php echo $fname; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="l_name">last name :</label>
                    </td>
                    <td>
                        <input type="text" name="l_name" id="" value=<?php echo $lname; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">email :</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="" value=<?php echo $email; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="p_number">phone number :</label>
                    </td>
                    <td>
                        <input type="number" name="p_number" id="" value=<?php echo $pnumber; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">D.O.B :</label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="" value=<?php echo $dob; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="update">
                    </td>
                </tr>
                <tr>
                    <?php
                    echo '<td><a href="forgot_password.php?fname=', $fname, '&lname=', $lname, '&dob=', $dob, '&email=', $email, '&pnumber=', $pnumber, '&username=', $username, '&password=', $password,'&destination=',$destination,'">Forgot Password</a></td>';
                    ?>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>