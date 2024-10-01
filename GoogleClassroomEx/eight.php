<?php

$countries = [
    'USA' => 'Washington, D.C.',
    'Canada' => 'Ottawa',
    'Germany' => 'Berlin (Updated)',
    'Japan' => 'Tokyo',
    'Australia' => 'Canberra',
    'France' => 'Paris',
];


$countryToAccess = 'Canada';


if (array_key_exists($countryToAccess, $countries)) {
    echo "The capital of $countryToAccess is " . $countries[$countryToAccess] . ".<br>";
}
?>
