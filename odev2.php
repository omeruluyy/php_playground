<?php


$planets = ["Mercury",
    "Venus",
    "Earth",
    "Mars",
    "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function checkArray($a)
{
    return ($a != NULL && $a != "");
}

function randomArrayCreator($array, $length)
{
    $purified = array_filter($array, "checkArray");
    $rand_keys = array_rand($purified, $length);
    $rand_arr = array_map(function ($e) use ($purified) {
        return ($purified[$e]);
    }, $rand_keys);
    echo "<br>";
    return $rand_arr;
}

print_r(randomArrayCreator($planets, 2));
print_r(randomArrayCreator($planets, 3));
print_r(randomArrayCreator($planets, 2));
print_r(randomArrayCreator($planets, 4));
print_r(randomArrayCreator($planets, 5));
