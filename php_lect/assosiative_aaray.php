<?php

    $shivam = array(
        "english" => 74,
        "math" => 65,
        "hindi" => 76,
        "science" => 84,
        "sst" => 72
    );

    print_r($shivam);   

    echo "<br><br>";

    foreach($shivam as $key => $value)
    {
        echo "$key = $value <br>";
    }



?>