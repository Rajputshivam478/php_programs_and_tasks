<?php
include 'config.php';
$user_id = "";
if (isset($_REQUEST['edit'])) {
    $user_id = $_REQUEST['edit_user_id'];
}

if (isset($conn)) {
    $result = mysqli_query($conn, "SELECT user.user_id,`fname`,`lname`,`email`,`password`,role.role_id,`role`,`created_date`,`modify_date` FROM `user` INNER JOIN `profile` ON profile.user_id = user.user_id INNER JOIN `role` ON user.role_id = role.role_id WHERE user.user_id = '$user_id'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $db_password = $row['password'];
        $role_id = $row['role_id'];
        // $user_id = $row['user_id'];
        $created_date = $row['created_date'];
        $modify_date = $row['modify_date'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $role = $row['role'];
    }
}

if (isset($_REQUEST['update'])) {

    $user_id = $_REQUEST['user_id'];
    $email = $_REQUEST['email'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $modify_date = $_REQUEST['modify_date'];

    if (isset($_FILES['image'])) {
        $filename = $_FILES['image']['name'];
        $tfilename = $_FILES['image']['tmp_name'];
        $destination = "./images/" . $filename;
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];

        if (move_uploaded_file($tfilename, $destination)) {
            $result = mysqli_query($conn, "SELECT * FROM `file` WHERE `user_id` = '$user_id'");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $result = mysqli_query($conn, "UPDATE `file` SET `size`='$size',`extension`='$type',`unique_name`='$tfilename',`name`='$filename',`path`='$destination' WHERE `user_id`='$user_id'");
                $msg = "file updated";
            } else {
                $result = mysqli_query($conn, "INSERT INTO `file`(`user_id`, `size`, `extension`, `unique_name`, `name`, `path`) VALUES ('$user_id','$size','$type','$$tfilename','$filename','$destination')");
                $msg = "file uploaded";
            }
        }
    } else {
        $msg = "file not uploaded";
    }

    $result = mysqli_query($conn, "UPDATE `user` SET `email`='$email',`modify_date`='$modify_date' WHERE `user_id`='$user_id'");
    
    $result = mysqli_query($conn, "UPDATE `profile` SET `fname`='$fname',`lname`='$lname' WHERE `user_id`='$user_id'");
    
    $role = $_SESSION['role'];
    if ($role == "admin") {
        header('location: admin_page.php');
    } else {
        header('location: user_profile.php');
    }
}
?>