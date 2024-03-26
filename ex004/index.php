<?php 

$arr = [
    [3],
    [11,2,4],
    [4,5,6],
    [10,8,(-12)]

];

function diagonalDifference($arr) {
    $sumP=0;
    $sumS=0;
    $contP = 0;
    $cont = 2;


    for( $i = 1; $i <= 3; $i++){

        $sumS += $arr[$i][$cont];
        echo "i = " . $i . "\n";
        echo "cont = " . $cont . "\n";
        echo "O numero atual é: " . $arr[$i][$cont] . "\n";
        $cont --;

    }

    echo "A soma da diagonal SECUNDARIA  é " . $sumS . "\n";

    echo "================================================ \n" ;

    for( $i= 1 ; $i <= 3; $i++){

        $sumP += $arr[$i][$contP];
        echo "i = " . $i . "\n";
        echo "cont = " . $contP . "\n";
        echo "O número atuel do ARRAY É: " . $arr[$i][$contP] . "\n";
        $contP ++;

    }

    echo "A soma da diagonal PRIMARIA  é " . $sumP . "\n";

    
    $diferenca = ($sumP - $sumS) * - 1;

    echo "A diferença entre as duas é " . $diferenca . "\n";

    
}


diagonalDifference($arr);