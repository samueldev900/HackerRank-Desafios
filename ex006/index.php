<?php 

$candles = [44, 53, 31, 27, 77, 60, 66, 77, 26,36];
$cont = 0;

function birthdayCakeCandles($candles) {

    $cont = 0;
    $igualdade = 0;

    for($i=0; $i < count($candles); $i++){

        echo $candles[$i] . "\n";
        if($candles[$i] > $cont){

            $cont = $candles[$i];

        }
    }

    for($i=0; $i < count($candles); $i++){

        if($candles[$i] == $cont){
            $igualdade = 1 + $igualdade;
        }
    }

    return  $igualdade;

}



birthdayCakeCandles($candles);
