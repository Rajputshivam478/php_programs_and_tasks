<?php
session_start();
if (isset($_REQUEST['update'])) {
    $f_name = $_REQUEST['f_name'];
    $l_name = $_REQUEST['l_name'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['email'];
    $p_number = $_REQUEST['p_number'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    foreach ($_SESSION as $key => $value) {
        if ($key == $username) {
            $_SESSION[$username] = array($f_name, $l_name, $dob, $email, $p_number, $username, $password);
            header('location: display_data_using_session.php');
        }
    }
}

?>