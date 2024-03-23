<?php 


/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    
    $caractere = "#";
    $space = " ";

    for ($i = 1; $i <= $n; $i++){
        
        echo str_repeat($space, $n-$i);
        echo str_repeat($caractere, $i);
        echo "\n";
    }


}

staircase(6);

