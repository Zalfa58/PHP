<?php

$first = [
    "first_name" => "Adam"
];

$last = [
    "last_name" => "Fahrizal"
];

$full = $first + $last;

var_dump($full);

$a = [
    "first_name" => "adam",
    "last_name" => "fahrizal"
];

$b = [
    "last_name" => "Zaru",
    "first_name" => "Hitori"
];


var_dump($a == $b);
var_dump($a === $b);

