<?php

$a = 10;
$b = 10;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);


// Operator Penugasan

echo "Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu menggunakan 
karakter = (sama dengan)
Operator penugasan sudah sering kita gunakan terutama ketika mengubag value sebuag variable
namun selain hal itu, operasi penugasan untuk operasi aritmatika";

echo "Operator Penugasan\n";
$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 8000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

// Operator Perbandingan

echo "Operator perbandingan, seperti namanya digunakan untuk membandingan dua buat value
Hasil operator perbandingan adalah boolean, true jika perbandingannya benar, false jika
perbandingannya salah";

echo "Operatot Perbandingan\n";
var_dump("10" == 10);
var_dump("10" === 10);

var_dump(10 > 9);
var_dump(10 >= 10);

// Operator Logika

echo "Operator logika adalah operator untuk membandingkan dua nilai boolean
hasil dari operator logika adalah boolean lagi";

echo "Operator Logika\n";

var_dump(true && true);
var_dump(true && false);

var_dump(true || true);
var_dump(true || false);

var_dump(true xor true);
var_dump(true xor false);

var_dump(!true);
var_dump(!false);


$l = 0.5;
$a = 10;
$t = 10;

var_dump($l * $a * $t);