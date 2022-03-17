<?php

class Parameter{
    static $tinggi = 8.9;
    static $Alas   = 14.7;

    static function T(){
        echo Parameter::$tinggi;
    }
    static function A(){
        echo Parameter::$Alas;
    }
}

    $Volume = (Parameter::$Alas* Parameter::$tinggi/2) * Parameter::$tinggi;
    printf("  %.3f m3",$Volume);
?>
    

