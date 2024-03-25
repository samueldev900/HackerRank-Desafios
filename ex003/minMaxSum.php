<?php 

$arr = array(2,1,4,3,5);

function miniMaxSum($arr){
    $cont = 0;
    $Dcont = 0;
    $cres = $arr;
    $decres = $arr;
    sort($cres);
    rsort($decres);

    for($i = 0; $i < 4; $i++){
        $cont += $cres[$i];
    }
    echo $cont . " ";

    for($i = 0; $i < 4; $i++){
        $Dcont += $decres[$i];
    }
    echo $Dcont;
}

miniMaxSum($arr);