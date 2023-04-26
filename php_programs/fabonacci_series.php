<?php
    $num = 10;
    $num1 = 0;
    $num2 = 1;
    $sum = 0;

    echo "fabonacci series : ", $num1 ," ", $num2," ";
    for($i=2; $i<$num ;$i++)
    {
        $sum = $num1 + $num2;
        echo $sum , " ";
        $num1 = $num2;
        $num2 = $sum;
    }
?>