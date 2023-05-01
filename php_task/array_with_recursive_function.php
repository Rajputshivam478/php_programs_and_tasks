<?php

$i = 0;
$arr = array(
    "birds" => array("Eagle", "Parrot", "Swan"),
    "mammals" => array(
        "Human",
        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
        ),
        "Elephant",
        "Monkey"
    ),
    "reptiles" => array(
        "snake" => array(
            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra"
            ),
            "Viper",
            "Anaconda"
        ),
        "Crocodile",
        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
        )
    )
);

function print_array_values($arr)
{

    foreach ($arr as $k1 => $v1) {
        foreach ($v1 as $k2 => $v2) {
            $string = gettype($v2);
            if ($string == "array") {
                foreach ($v2 as $k3 => $v3) {
                    $str2 = gettype($v3);
                    if ($str2 != "array") {
                        echo " , ";
                        echo $v3;
                    }
                    else
                    {
                        foreach($v3 as $k4 => $v4)
                        {
                            echo " ' ";
                            echo $v4;
                        }
                    }
                }
            } else {
                echo " , ";
                echo $v2;
            }
        }
    }

}

function print_arr($arr){

    foreach($arr as $key => $value)
    {
        $str = gettype($value);
        if($str != "array")
        {
        echo " , ";
        echo $value;
        }
        else {
            print_arr($value);
        }
    }

}

print_array_values($arr);
echo "<br><br>";
print_arr($arr);


?>