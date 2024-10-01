<?php

$cities = [
    'New York' => [
        'population' => 8419600,
        'area' => 468.9, 
        'country' => 'USA'
    ],
    'Tokyo' => [
        'population' => 13929286,
        'area' => 845.0, 
        'country' => 'Japan'
    ],
    'Paris' => [
        'population' => 2140526,
        'area' => 40.7, 
        'country' => 'France'
    ],
    'London' => [
        'population' => 8982000,
        'area' => 607.0,
        'country' => 'UK'
    ],
    'Sydney' => [
        'population' => 5312163,
        'area' => 1687.0,
        'country' => 'Australia'
    ],
];


foreach ($cities as $city => $info) {
    echo "City: $city\n";
    echo "Population: " . $info['population'] . "<br>";
    echo "Area: " . $info['area'] . " square miles<br>";
    echo "Country: " . $info['country'] . "<br>";
    echo "<br>"; 
}
?>
