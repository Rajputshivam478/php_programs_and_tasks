<?php

class exampleClass
{
    public static $foo;
    public $bar;
    public function regularFunction()
    {
        echo $this->bar;
    }

    public static function staticFunction()
    {
        echo self::$foo;
    }

    public static function anotherStatFn()
    {
        self::staticFunction();
    }

    public function regularFnUsingStaticVar()
    {
        echo self::$foo;
    }

}

exampleClass::$foo = "Hello";

$obj = new exampleClass();

$obj->bar = "World!";

echo "</br>call static function</br>";
exampleClass::staticFunction();

echo "</br></br>call regular function</br>";
$obj->regularFunction();
?>