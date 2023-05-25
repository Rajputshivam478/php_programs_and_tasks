<?php
if (isset($_REQUEST['view'])) {
    $user_id = $_REQUEST['edit_user_id'];
} elseif (isset($_REQUEST['edit'])) {
    $user_id = $_REQUEST['edit_user_id'];
} else {
    $user_id = $_SESSION['user_id'];
}

include 'config.php';

if (isset($conn)) {
    $result = mysqli_query($conn, "SELECT * FROM `file` WHERE `user_id`='$user_id'");
    if (isset($result) > 0) {
        $result = mysqli_query($conn, "SELECT user.user_id,`fname`,`lname`,`email`,`password`,role.role_id,`role`,`created_date`,`modify_date`,`deleted_date`,`size`,`extension`,`unique_name`,`name`,`path` FROM `user` INNER JOIN `profile` ON profile.user_id = user.user_id INNER JOIN `role` ON user.role_id = role.role_id INNER JOIN `file` ON user.user_id = file.user_id WHERE user.user_id = '$user_id'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $email = $row['email'];
            $db_password = $row['password'];
            $role_id = $row['role_id'];
            $user_id = $row['user_id'];
            $created_date = $row['created_date'];
            $modify_date = $row['modify_date'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $role = $row['role'];
            $size = $row['size'];
            $extension = $row['extension'];
            $unique_name = $row['unique_name'];
            $name = $row['name'];
            $path = $row['path'];
            $deleted_date = $row['deleted_date'];

        } else {
            $result = mysqli_query($conn, "SELECT user.user_id,`fname`,`lname`,`email`,`password`,role.role_id,`role`,`created_date`,`modify_date`,`deleted_date` FROM `user` INNER JOIN `profile` ON profile.user_id = user.user_id INNER JOIN `role` ON user.role_id = role.role_id WHERE user.user_id = '$user_id'");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $email = $row['email'];
                $password = $row['password'];
                $role_id = $row['role_id'];
                $user_id = $row['user_id'];
                $created_date = $row['created_date'];
                $modify_date = $row['modify_date'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $role = $row['role'];
                $deleted_date = $row['deleted_date'];

            }
        }
    }
}

?>