<?php
include 'config.php';
$user_id = "";
if (isset($_REQUEST['delete'])) {
    $user_id = $_REQUEST['edit_user_id'];
}
// $result = mysqli_query($conn, "DELETE FROM `user` WHERE `user_id`='$user_id'");
// $result = mysqli_query($conn, "DELETE FROM `profile` WHERE `user_id`='$user_id'");
// $result = mysqli_query($conn, "DELETE FROM `file` WHERE `user_id`='$user_id'");
$date = date("y/m/d h:i:s");
// echo $date;
$result = mysqli_query($conn, "UPDATE `user` SET `deleted_date`='$date' WHERE `user_id`='$user_id'");
header('location: ../admin_page.php');
?>