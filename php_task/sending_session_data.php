<?php
session_start();
if (isset($_REQUEST['submit'])) {
    if ($_REQUEST['password'] == $_REQUEST['c_password']) {
        if (isset($_FILES['image'])) {
            $f_name = $_REQUEST['f_name'];
            $l_name = $_REQUEST['l_name'];
            $dob = $_REQUEST['dob'];
            $email = $_REQUEST['email'];
            $p_number = $_REQUEST['p_number'];
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $filename = $_FILES['image']['name'];
            $tfilename = $_FILES['image']['tmp_name'];
            $destination = "upload/" . $filename;

            if (move_uploaded_file($tfilename, $destination)) {
                echo 'file uploded';
                if (count($_SESSION) == 0) {
                    $_SESSION[$username] = array($f_name, $l_name, $dob, $email, $p_number, $username, $password, $destination);
                    // header('location: display_session_data.php');
                    header('location: display_data_using_session.php');
                } else {
                    foreach ($_SESSION as $key => $value) {
                        if ($key == $username) {
                            echo '<p style="padding:10px; margin:20px;  border:2px solid black;  text-align:center; color:red; font-size:36px;">User already exits</p>';
                        } else {
                            $_SESSION[$username] = array($f_name, $l_name, $dob, $email, $p_number, $username, $password, $destination);
                            header('location: display_data_using_session.php');
                        }
                    }
                }
            } else {
                echo 'file not uploaded..';
            }
        } else {
            echo '<p style="padding:10px; margin:20px;  border:2px solid black;  text-align:center; color:red; font-size:36px;">Image is not uploaded...</p>';
        }
    } else {
        echo '<p style="padding:10px; margin:20px;  border:2px solid black;  text-align:center; color:red; font-size:36px;">password and confirm password not matched...</p>';
    }
}
?>