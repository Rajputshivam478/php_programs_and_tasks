<?php
    const num = 20; //const keyword is use for declaring constant
    define("msg", "this message is create using define function"); //define function is also used to declare constant

    echo "constant variable using const keyword : ", num ,"<br>"; //print the value of constant variable
    echo "constant message using define function : " . msg; //print the value of msg declare using define function
?>