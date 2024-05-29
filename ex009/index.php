<?php 

$apples = [2,3,-4];

$oranges = [3,-2,-4];

$s = 7;
$t = 10;
$a = 4;
$b = 12;

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $count = 0;
    $caiuApple = 0;
    $caiuOrange = 0;
    // Write your code here
    $countApples = [];
    $countOrange = [];

    foreach($apples as $key){
        $countApples[$count] = $key + $a;
        $count ++;
    }
    $count = 0;
    foreach($countApples as $key){

        if($key >= $s && $key <= $t ){

            $caiuApple ++;

        }
        
    }

    $count = 0;
    foreach($oranges as $key){
        $countOrange[$count] = $key + $b;
        $count ++;
    }

    foreach($countOrange as $key){

        if($key >= $s && $key <= $t ){

            $caiuOrange ++;

        }
        
    }
    echo $caiuApple . "\n" . $caiuOrange;
    return [$caiuApple, $caiuOrange];
}

countApplesAndOranges(7,10,4,12,$apples,$oranges);