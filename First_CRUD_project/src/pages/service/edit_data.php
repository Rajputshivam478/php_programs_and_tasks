<?php
include 'config.php';
$user_id = "";
if (isset($_REQUEST['edit'])) {
    $user_id = $_REQUEST['edit_user_id'];
}
if (isset($_REQUEST['update'])) {

    $user_id = trim($_REQUEST['user_id']);
    $email = trim($_REQUEST['email']);
    $fname = trim($_REQUEST['fname']);
    $lname = trim($_REQUEST['lname']);
    $modify_date = trim($_REQUEST['modify_date']);

    if (strlen($user_id) != 0 && strlen($email) != 0 && strlen($fname) != 0 && strlen($lname) != 0) {
        if (isset($_FILES['image'])) {
            // $date = date("y/m/d h:i:s", $actualtime);
            $filename = $_FILES['image']['name'];
            $tfilename = $_FILES['image']['tmp_name'];
            $destination = "images/" . $filename;
            $size = $_FILES['image']['size'];
            $type = $_FILES['image']['type'];

            if (move_uploaded_file($tfilename, $destination)) {
                $finame = pathinfo($filename, PATHINFO_FILENAME);
                $fextension = pathinfo($filename, PATHINFO_EXTENSION);
                $filename = $finame . " " . date("y/m/d h:i:s") . "." . $fextension;
                $result = mysqli_query($conn, "SELECT * FROM `file` WHERE `user_id` = '$user_id'");
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo "update";
                    $result = mysqli_query($conn, "UPDATE `file` SET `size`='$size',`extension`='$fextension',`unique_name`='$tfilename',`name`='$filename',`path`='$destination' WHERE `user_id`='$user_id'");
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
    } else {
        $msg = "Incorrect Data..";
    }
}


?>