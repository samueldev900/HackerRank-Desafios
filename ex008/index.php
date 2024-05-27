<?php 

$grades = array(4, 73, 67, 38, 33);

 // 4, 75, 67, 40, 35

function gradingStudents($grades) {

    $multiFive = 0;

    for($i = 0; $i < count($grades) ; $i++){

        $multiFive = $grades[$i];

        while($multiFive % 5 !==0){

            $multiFive++;
        }
        if($multiFive - $grades[$i] < 3 && $grades[$i] >= 38 ){

            $grades[$i] = $multiFive;

        }
        

    }

    return $grades;
}


$roundedGrades = gradingStudents($grades);

// Print the rounded grades
foreach ($roundedGrades as $grade) {
    echo $grade . "\n";
}