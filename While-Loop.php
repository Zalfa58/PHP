<?php
echo "While loop adalah versi perulangan yang lebih sederhana di banding for loop\n
Di while loop. hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement";

$counter = 1;

while ($counter <= 10) {
    echo " Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
}

//  sytax
$counter = 1;

while ($counter <= 10) :
    echo " Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;

// Dp While Loop
$counter1 = 100;
do {
    echo "Hello While Loop : " . $counter1 . PHP_EOL;
    $counter1++;
} while ($counter <= 10);