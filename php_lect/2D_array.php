<?php

    $emp = array(
        array(1,"ajay","software tester"),
        array(2,"shivam","manager"),
        array(3,"rajesh","web designer"),
        array(4,"imran","software developer")
    );


    echo "<table border cellpadding = '10px' cellspacing = '0'>";
    foreach($emp as $row)
    {
        echo "<tr>";
        foreach($row as $col)
        {
            echo "<td> $col </td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>