<?php

$fruits = ['Banana', 'Apple', 'Cherry', 'Orange', 'Grapes'];


$fruitsAscending = $fruits;
sort($fruitsAscending);


$fruitsDescending = $fruits;
rsort($fruitsDescending);


echo "Fruits in ascending order:\n";
print_r($fruitsAscending);

echo "<br>Fruits in descending order:\n";
print_r($fruitsDescending);
?>
