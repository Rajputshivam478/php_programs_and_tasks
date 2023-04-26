<?php

    $num = 109;

    switch ($num)
    {
        case ($num >= 0 && $num <= 9):
            echo "Number is once";
            break;

        case ($num >= 10 && $num <= 99):
            echo "Number is tens";
            break;

        case ($num >= 100 && $num <=999):
            echo "Number is hundreds";
            break;
        
        default:
            echo "Number is more than hundreds";
    }
    
?>