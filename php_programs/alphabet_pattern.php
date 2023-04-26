<?php
$range = 6;
$num1 = 0;
$alpha = range('A','Z');

for($i = 1; $i <= 6;$i++)
{
    $range--;
    $num1=0;
    for($j = 1; $j <= $range; $j++)
    {
        echo '&nbsp;&nbsp;';
    }
    for($k = 0; $k < $i; $k++)
    {
        echo $alpha[$num1];  
        $num1++;
    }
    $num1--;
    for($l = $i; $l > 1;$l--)
    {
        $num1--;
        echo $alpha[$num1];
    }
    echo "<br>";
}

?>