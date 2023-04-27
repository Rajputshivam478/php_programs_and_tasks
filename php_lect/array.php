<?php
    $arr = array(1,2,3,6,4);
    $arr1 = [1,2,5,4,9];
    $arr2 = array("apple","mango",20,2.56);

    echo "first array <br><br>";
    for($i = 0; $i < count($arr);$i++)
    {
        echo "value on index[",$i,"] is : ",$arr[$i],"<br>";
    }

    echo "<br><br> second array <br><br>";
    for($i = 0; $i < count($arr1);$i++)
    {
        echo "value on index[",$i,"] is : ",$arr1[$i],"<br>";
    }


    echo "<br><br> third array <br><br>";
    for($i = 0; $i < count($arr2);$i++)
    {
        echo "value on index[",$i,"] is : ",$arr2[$i],"<br>";
    }
?>