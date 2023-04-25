<?php
    function test(){
        static $num1=10;
        $num2=10;

        $num1++;
        $num2++;

        echo "<br><br>";
        echo "value of static variable :". $num1 ."<br>";

        echo "value of non-static variable :". $num2;
    }

    test();
    test();
?>