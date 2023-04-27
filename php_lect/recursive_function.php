<?php

    $fact = 1;
    function fact($num)
    {   
        global $fact;
        $fact *= $num;
        $num--;
        
        if($num > 0)
        {
            fact($num);
        }

        return $fact;
    }


    $num = 3;
    $sum = fact($num);
    echo "factorial of given number is : ",$sum; 
?>