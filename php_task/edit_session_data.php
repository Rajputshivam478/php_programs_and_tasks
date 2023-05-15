<?php
if (isset($_REQUEST['update'])) {
    $f_name = $_REQUEST['f_name'];
    $l_name = $_REQUEST['l_name'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['email'];
    $p_number = $_REQUEST['p_number'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $filename = $_FILES['image']['name'];
    $tfilename = $_FILES['image']['tmp_name'];

    if (strlen($filename) == 0) {
        foreach ($_SESSION as $key => $value) {
            if ($key == $username) {
                $destination = $value[7];
                $_SESSION[$username] = array($f_name, $l_name, $dob, $email, $p_number, $username, $password, $destination);
                header('location: display_data_using_session.php');
            }
        }
    } else {
        $destination = "upload/" . $filename;
        move_uploaded_file($tfilename,$destination);

        foreach ($_SESSION as $key => $value) {
            if ($key == $username) {
                $_SESSION[$username] = array($f_name, $l_name, $dob, $email, $p_number, $username, $password, $destination);
                header('location: display_data_using_session.php');
            }
        }
    }
}

?>