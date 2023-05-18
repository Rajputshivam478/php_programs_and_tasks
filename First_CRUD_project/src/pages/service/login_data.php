<?php
if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
        include 'config.php';
        if (isset($conn)) {
            $result = mysqli_query($conn, "SELECT user.user_id,`fname`,`lname`,`email`,`password`,role.role_id,`role`,`created_date`,`modify_date` FROM `user` INNER JOIN `profile` ON profile.user_id = user.user_id INNER JOIN `role` ON user.role_id = role.role_id WHERE `email` = '$email'");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['db_password'] = $row['password'];
                $_SESSION['role_id'] = $row['role_id'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['created_date'] = $row['created_date'];
                $_SESSION['modify_date'] = $row['modify_date'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['role'] = $row['role'];

            if ($password == $_SESSION['db_password']) {
                if ($_SESSION['role_id'] == '1') {
                    $msg = "login";
                    header('location: admin_page.php');
                } else {
                    $msg = "login";
                    header('location: user_profile.php');
                }
            } else {
                $msg = 'Invalid Password..';
            }
        } else {
            $msg = 'Invalid Email..';
        }
    } else {
        $msg = "sever is not working something wrong.";
    }
}
?>