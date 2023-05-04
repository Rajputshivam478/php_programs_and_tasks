<?php
echo "Types of error in php<br><br>";

//thier is five type of error
// 1. warning error
//2. fatel error
//3. notice error
//4. parse/syntax error
//5. logical error

// notice error
$x =4;
echo $y;



//warning error
include 'type.php';



//parse error
function sum()
{
    $x= 4;
    $y=9;
    echo "sum is",$x + $y
}



//fatel error
function sum1($x,$y)
{
    echo "sum is",$x + $y;
}

sum1();



//logical error
function div($x,$y)
{
    echo "division is",$x / $y;
}

div(10,0);
?>