
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
