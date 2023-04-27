<?php

    function add($num1,$num2)
    {
        echo "addition of two number is :",$num1 + $num2;
    }
    function sub($num1,$num2)
    {
        echo "subraction of two number is : ",$num1 - $num2;
    }
    function mul($num1,$num2)
    {
        echo "multiplication of two number is : ",$num1 * $num2;
    }
    function div($num1,$num2)
    {
        echo "division of two number is : ",$num1 / $num2;
    }

    function cal($num1,$num2,$opt)
    {
        switch ($opt){
            case 1:
                add($num1,$num2);
                break;
            case 2:
                sub($num1,$num2);
                break;
            case 3:
                mul($num1,$num2);
                break;
            case 4:
                div($num1,$num2);
                break;
            default:
                echo "wrong option";
        }
    }

    $num1 = 10;
    $num2 = 20;
    $opt = 1;

    cal($num1,$num2,$opt); 

?>