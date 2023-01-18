<?php

// Function Return Value

// Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
// Dan dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang dihasilkan
// Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu

function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);

// 2

function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(40);
var_dump($score);