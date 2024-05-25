<?php

$s = '02:40:03PM';

function timeConversion($s) {
    $hour = substr($s, 0, 2);
    $minutesSeconds = substr($s, 2, 6); // Pegue os minutos e segundos
    $pmAM = substr($s, -2);

    if ($pmAM == 'AM') {
        if ($hour == '12') {
            $hour = '00'; // Converta 12 AM para 00
        }
    } else {
        if ($hour != '12') {
            $hour = strval((int)$hour + 12); // Converta PM para formato 24h
        }
    }

    return $hour . $minutesSeconds;
}

$n = timeConversion($s);
echo $n;

?>
