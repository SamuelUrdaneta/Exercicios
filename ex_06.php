<?php

function conveterTemperatura($temp){

    $temp = "c";
    $temp2 = "f"
    $temperatura = 0;
    $celcius = "c";
    $farenheim ="F";
    $kelvin = "k";

    if( $temp = $celcius){
        if($temp2 = $farenheim){
            $temperatura = (($temperatura*1.8)+32);
        }else{
            $temperatura = ($temperatura+273.15);
        };
    }
}

?>