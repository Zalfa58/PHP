<?php
// Recusive Function
// Recusive function adalah kemampuan function memanggil function dirinya sendiri
// Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recusive function, seperti contohnya kasus factorial

// Factorial Loop atau menggunakan perulangan
function factorialLoop(int
 $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
 }

 var_dump(factorialLoop(6));
 var_dump(1 * 2 * 3 * 4 *5);

//  Factorial Recursive

function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

// Problem dengan Recursive
// Walaupun recursive function itu sangat menarik, namun kita perlu berhati hati
// Jika recursive terlalu dalam, maka akan ada kemungkinkan  terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di php
// Kenapa proble ini bisa terjadi? karena ketika kita memanggil function lain, maka stacakan menumpuk terus, dan
// jika terlalu banyak, maka akan membutuhkan konsumsi memory besar, jika sudah melewati batas,maka akan terjadi error memory

// kode error stack overflow

function loop(int $value)
{
    if($value == 0) {
        echo "selesai" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(10);