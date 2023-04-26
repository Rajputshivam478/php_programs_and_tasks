<?php

    $num = 371;
    $num2 = $num;
    $str = (string)$num;
    $count = strlen($str);
    $sum=0;

    do{
        $num1 = $num % 10;
        $sum += $num1 ** $count;
        $num /= (int)10;

    }while($num != 0);
    
    if($num2 == $sum)
    {
        echo "Armstrong Number";
    }
    else
    {
        echo "Not a Armstrong Number";
    }
?>