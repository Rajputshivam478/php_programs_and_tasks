<?php
$user_id = 0;

    $user_id = $_REQUEST['user_id'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($user_id == 101){
    include 'config.php';
    if (isset($conn)) {
        $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$user_id'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email) {
                if ($password == $row['password']) {
                    $msg = "data matched";
                    $check = 1;
                } else {
                    $msg = 'Invalid Password..';
                }
            } else {
                $msg = "Invalid Email..";
            }
        } else {
            $msg = "User ID Doesn't exists..";
        }
    } else {
        $msg = "sever is not working something wrong.";
    }
}


if (isset($_REQUEST['change'])) {

    $n_password = $_REQUEST['n_password'];
    $c_password = $_REQUEST['c_password'];

    include 'config.php';
    if (isset($conn)) {
        $result = mysqli_query($conn, "SELECT user.user_id,`fname`,`lname`,`email`,`password`,role.role_id,`role`,`created_date`,`modify_date` FROM `user` INNER JOIN `profile` ON profile.user_id = user.user_id INNER JOIN `role` ON user.role_id = role.role_id WHERE user.user_id = '$user_id'");

        if ($n_password == $c_password) {
            $result = mysqli_query($conn, "UPDATE `user` SET `password` = '$n_password'");
            $msg = "password updated";
        } else {
            $msg = 'Confirm Password not matched..';
        }
    } else {
        $msg = 'Server Issue..';
    }
}

?>