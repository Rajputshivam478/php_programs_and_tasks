<?php

class dog
{
    protected $color = "";
    public function walking()
    {
        echo "dog is walking </br>";
    }
    public function color($color){
        echo "my color is $color </br>";
    }
}


$obj = new dog();

$obj -> walking();
$obj -> color("brown");


?>