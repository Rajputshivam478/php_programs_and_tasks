<?php
session_start();
?>
<table border = "1" cellpadding = "5px">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>D.O.B</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Username</th>
    <th>Password</th>
</tr>
<?php
foreach($_SESSION as $key => $value)
{
    echo "<tr>";
    for($i = 0; $i < count($_SESSION[$key]); $i++)
    {
        echo "<td> $value[$i] </td>";
    }
    echo"</tr>";
}
?>

</table>
<br><br><br>
<a href="display_data_using_session.php">Back to form</a>