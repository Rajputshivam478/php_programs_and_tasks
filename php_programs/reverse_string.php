<?php
    $str = "hello";
    $len = strlen($str);
    for($i = $len - 1; $i >= 0; $i--)
    {
        echo $str[$i];
    }

?>