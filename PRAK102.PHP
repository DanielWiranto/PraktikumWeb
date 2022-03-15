<?php

class Parameter{
    public static $tinggi = 8.9;
    public static $Alas   = 14.7;

    public static function T(){
        echo Parameter::$tinggi;
    }
    public static function A(){
        echo Parameter::$Alas;
    }
}

    $Volume = (Parameter::$Alas* Parameter::$tinggi/2) * Parameter::$tinggi;
    printf("  %.3f m3",$Volume);
?>
    

