<?php

final class animal
{
    final function sound()
    {
        echo "sounds </br>";    
    }
}

class dog extends animal
{
        public function sound()
    {
        echo "dog is barking</br>";
    }
}

class cat extends animal
{
    public function sound()
    {
        echo "cat sounds meow </br>";
    }
}

$animal = new animal();
$dog = new dog();
$cat = new cat();

echo "call sound function using animal class object </br>";
$animal->sound();
echo "</br>";

echo "call sound function using dog class object </br>";
$dog->sound();
echo "</br>";

echo "call sound function using cat class object </br>";
$cat->sound();
echo "</br>";
?>