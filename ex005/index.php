<?php 

$a = [5,6,7];
$b = [3,6,10];
function compareTriplets($a, $b) {
    $resultA = 0;
    $resultB = 0;

    for($i = 0;$i < 3;$i++){
        
        if($a[$i] > $b[$i]){

            $resultA += 1;

        }
        elseif($a[$i] < $b[$i]){
            $resultB += 1;
        }

    }

    return [$resultA, $resultB];

}

compareTriplets($a,$b);
