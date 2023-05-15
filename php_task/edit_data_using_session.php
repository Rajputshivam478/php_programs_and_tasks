<?php
session_start();
if (isset($_REQUEST['username'])) {
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
    <form action="" method="post" enctype="multipart/form-data">
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
                        <input type="password" name="password" id="" value=<?php echo $password; ?> hidden>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Uploaded Image :</label>
                    </td>
                    <td style="display:flex; align-items:center;">
                        <input type="file" name="image" id="image">
                        <img src="<?php echo $destination; ?>" alt="" height="80px" width="80px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="update">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>