<?php

class car{
    protected $color;
    public $tier;
    protected $airbag;
    private $brand;

    public function run(){
        echo "car is running";
    }
}

$obj = new car();

$obj -> run();

?>