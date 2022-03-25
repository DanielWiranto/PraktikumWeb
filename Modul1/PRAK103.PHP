<?php

    function C(){
        static $celcius = 37.841;
        return $celcius;
    
    }

    $Fahrenheit = (9/5)*C() + 32;
    printf ("Fahrenheit (F) = %.4f ",$Fahrenheit);
    echo "<br>";    

    $Reamur = (4/5)*C();
    printf ("Reamur (R) = %.4f ",$Reamur);
    echo "<br>";
    
    $Kelvin = C() + 273;
    printf ("Kelvin (K) = %.4f ",$Kelvin);
    
    
?>