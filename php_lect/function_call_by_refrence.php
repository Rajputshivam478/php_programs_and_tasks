<?php

    function call(&$name)
    {
        $name = "shivam";
    }

    $name = "rahul";
    call($name);

    echo $name;

?>