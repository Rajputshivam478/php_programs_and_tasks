<?php

class static_example
{
    public function __construct($num1,$num2){
        self::$num1 = $num1;
        self::$num2 = $num2;
    }
    public static $num1;
    public static $num2;

    public function sum()   
    {
        return self::$num1 + self::$num2;
    }
}

$obj = new static_example(50,50);

echo "the sum to two number is: ",$obj->sum();

?>