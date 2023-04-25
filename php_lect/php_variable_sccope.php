<?php  
    $num1 = 5;      //global variable  
    $num2 = 13;     //global variable  
    function global_var()  
    {  
            global $num2;
            $num1=10;
            $sum = $num1 + $GLOBALS['num1'];  
            echo "Sum of global variables is: " .$sum;  
    }  
    global_var();
?>  