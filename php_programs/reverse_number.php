<?php
$num = 123;
$rev = 0;
$num2 = $num;
while ($num != 0) {
    $num1 = $num % 10;
    $num /= 10;
    $num = (int)$num;
    echo $num1;
}

?>