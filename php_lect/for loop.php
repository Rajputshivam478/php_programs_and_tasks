<?php

    for($i=0;$i<=10;$i++){
        echo $i," ";
    }
    echo "<br><br>";


    //nested for loop
    
    for($i=0;$i<=5;$i++)
    {
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>