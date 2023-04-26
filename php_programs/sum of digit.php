<?php
    $num = 1235;
    $sum = 0;

    do{
        $num1 = $num % 10;
        $sum += $num1;
        $num /= (int)10;
    }while($num != 0);

    echo "Sum of two number is :" , $sum;

?>