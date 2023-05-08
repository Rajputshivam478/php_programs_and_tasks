<?php
session_start();
if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    foreach ($_SESSION as $key => $value) {
            if($key == $username)
            {
                unset($_SESSION[$key]);
                header("location: display_data_using_session.php");
            }
            else{
                echo "username doesn't exits";
            }
    }
}

?>
