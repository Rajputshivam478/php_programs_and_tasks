<?php
$vegetables = array("tamato", "carrot", "onion", "radish");

    for($i=0;$i<=10;$i++){
        echo $i," ";
    }
    echo "<br><br>";

    for($i=0;$i<=5;$i++)
    {
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    
    echo "<br>";
    foreach($vegetables as $veg){
        echo "vegetable are : $veg <br>";
    }
?>