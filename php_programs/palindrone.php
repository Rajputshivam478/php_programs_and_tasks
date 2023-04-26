<?php
$num = 121;
$num2 = $num;
$rev = 0;
while ($num != 0) {
    $num1 = $num % 10;
    $rev += $num1;
    if ($rev != $num2) {
        $rev *= 10;
    }
    $num /= 10;
    $num = (int)$num;
}

if ($rev == $num2) {
    echo "palidrone number";
} 
else {
    echo "not a palindrone number";
}

?>