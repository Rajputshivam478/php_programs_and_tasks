<?php
$username = $_REQUEST['username'];
include('edit_session_data.php');
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
                    <input type="text" name="username" id="" value=<?php echo $username ?> disabled>
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
                    <input type="submit" name="update">
                </td>
            </tr>
        </form>
</body>

</html>


?>