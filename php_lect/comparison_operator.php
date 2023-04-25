<?php

    $num=10;
    $num2=15;

    echo $num == $num2 , "<br>";  //false
    echo $num === $num2 , "<br>"; //false
    echo $num !== $num2 , "<br>"; //true    
    echo $num != $num2 , "<br>";   //true
    echo $num <> $num2 , "<br>";    //true
    echo $num > $num2 , "<br>"; //false
    echo $num < $num2 , "<br>"; //true
    echo $num <= $num2 , "<br>"; //true
    echo $num >= $num2 , "<br>";    //false
    echo $num <=> $num2 , "<br>";   //-1

?>