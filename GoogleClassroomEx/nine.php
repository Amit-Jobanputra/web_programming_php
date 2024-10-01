<?php

$countries = [
    'USA' => 'Washington, D.C.',
    'Canada' => 'Ottawa',
    'Germany' => 'Berlin (Updated)',
    'Japan' => 'Tokyo',
    'Australia' => 'Canberra',
    'France' => 'Paris',
];


ksort($countries);
echo "Countries sorted by keys (ascending):\n";
foreach ($countries as $country => $capital) {
    echo "$country: $capital<br>";
}

echo "<br>";


$sortedByValue = $countries;
arsort($sortedByValue);

echo "Countries sorted by values (capitals) in descending order:<br>";
foreach ($sortedByValue as $country => $capital) {
    echo "$country: $capital<br>";
}
?>
