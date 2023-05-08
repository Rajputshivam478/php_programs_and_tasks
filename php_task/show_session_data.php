<?php
foreach ($_SESSION as $key => $value) {
    echo "<tr>";
    for ($i = 0; $i < count($_SESSION[$key]); $i++) {
        echo "<td> $value[$i] </td>";
    }
    echo '<td><a href="delete_data_using_session.php?username=',$value[5],'">delete</a></td>';
    echo '<td><a href="edit_data_using_session.php?username=',$value[5],'">edit</a></td>';
    echo "</tr>";
}
?>