<?php
$destination;
foreach ($_SESSION as $key => $value) {
    echo "<tr>";
    for ($i = 0; $i < count($_SESSION[$key]) - 1 ; $i++) {
        echo "<td> $value[$i] </td>";
        $destination = $value[7];
    }
    echo '<td><img src="'.$destination.'" alt="" height="50px" width="50px"></td>';
    echo '<td><a href="delete_data_using_session.php?username=', $value[5], '">delete</a></td>';
    echo '<td><a  href="edit_data_using_session.php?username=', $value[5],'">edit</a></td>';
    echo '<td><a href="forgot_password.php?username=', $value[5],'">Forgot Password</a></td>';
    echo "</tr>";
}
?>
<!-- echo <td>
<form action="edit_data_using_session.php" method="post" id="form">
<input type="text" name="fname" value=',$value[0],' hidden>
<input type="text" name="lname" value=',$value[1],' hidden>
<input type="text" name="dob" value=',$value[2],' hidden>
<input type="text" name="email" value=',$value[3],' hidden>
<input type="text" name="pnumber" value=',$value[4],' hidden>
<input type="text" name="username" value=',$value[5],' hidden>
<input type="text" name="password" value=',$value[6],' hidden>  
<button type="submit" style="border: none; background: transparent; color:blue;"><u>edit</u></button>
</form></td>'; -->