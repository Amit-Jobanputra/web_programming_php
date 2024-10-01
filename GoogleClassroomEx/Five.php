<?php

$students = [
    ['name' => 'PHP', 'scores' => [85, 90, 78]], 
    ['name' => 'DBMS', 'scores' => [92, 88, 95]],
    ['name' => 'RWDT', 'scores' => [75, 80, 82]],
];


foreach ($students as $student) {
    echo "Scores for " . $student['name'] . ":<br>";
    echo "Subject 1: " . $student['scores'][0] . "<br>";
    echo "Subject 2: " . $student['scores'][1] . "<br>";
    echo "Subject 3: " . $student['scores'][2] . "<br>";
    echo "<br>";
}
?>
