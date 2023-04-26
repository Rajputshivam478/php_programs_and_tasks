<?php

    $num = 21;
    $bool = false;
    
    for($i=2; $i<$num; $i++)
    {
        if($num % $i == 0)
        {
            $bool = true;
        }
    }

    if($bool != true)
    {
        echo "prime number";
    }
    else
    {
        echo "Not a prime number";
    }
?>