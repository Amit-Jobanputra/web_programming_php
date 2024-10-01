<?php

$countries = [
    'USA' => 'Washington, D.C.',
    'Canada' => 'Ottawa',
    'Germany' => 'Berlin',
    'Japan' => 'Tokyo',
    'Australia' => 'Canberra',
];


$countries['France'] = 'Paris';


$countries['Germany'] = 'Berlin (Updated)';


echo "Updated Country-Capital Pairs:<br>";
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
