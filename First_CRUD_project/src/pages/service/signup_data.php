<?php
if (isset($_POST['singup'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role_id = 2;
    $c_password = trim($_POST['c_password']);
    $created_date = date("y/m/d h:i:s");
    $modify_date = date("y/m/d h:i:s");
    // $created_date = $_POST['created_date'];
    // $modify_date = $_POST['modify_date'];
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);

    if (strlen($email) != 0 && strlen($password) != 0 && strlen($c_password) != 0 && strlen($fname) != 0 && strlen($lname) != 0) {
        include 'config.php';

        if ($password == $c_password) {
            if (isset($conn)) {
                $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'");
                if (mysqli_num_rows($result) > 0) {
                    $msg = "User already exits";
                    // $row = mysqli_fetch_assoc($result);
                    // $user_id = $row['user_id'];
                    // $res = mysqli_query($conn, "INSERT INTO `profile`(`user_id`, `fname`, `lname`) VALUES ('$user_id','$fname','$lname')");
                } else {
                    $result = mysqli_query($conn, "INSERT INTO `user`(`email`, `password`, `role_id`, `created_date`, `modify_date`) VALUES ('$email','$password','$role_id','$created_date','$modify_date')");
                    $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'");
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $user_id = $row['user_id'];
                        $res = mysqli_query($conn, "INSERT INTO `profile`(`user_id`, `fname`, `lname`) VALUES ('$user_id','$fname','$lname')");
                    }
                    if ($result) {
                        $msg = "Data saved";
                    } else {
                        $msg = "User already exits";
                    }
                }
            } else {
                $msg = "sever is not working something wrong.";
            }
        } else {
            $msg = "Confirm Password doesn't match.";
        }
    }else{
        $msg = "Incorrect Data..";
    }
}
?>