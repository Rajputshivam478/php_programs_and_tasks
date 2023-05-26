<?php

class animal
{
    protected $color;
    public function walking()
    {
        echo "walking </br>";
    }
    public function color($color)
    {
        echo "my color is $color </br>";
    }
}

class dog extends animal{
    public function sound(){
        echo "dog is barking</br>";
    }
}

class cat extends animal{
    public function sound(){
        echo "cat sounds meow</br>";
    }
}


$dog = new dog();
$cat = new cat();

echo "</br>properties of animal and dog class using dog class object </br></br>";
$dog ->walking();
$dog ->color("white");
$dog ->sound();


echo "</br>properties of animal and cat class using cat class object </br></br>";
$cat ->walking();
$cat ->color("white");
$cat ->sound();



?>