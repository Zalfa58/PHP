<?php
echo "Dot (titk) operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya) <br>";
echo "Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string. namun jika kita coba \n <br>
tembahkan string dengan tipe data number mereka terjadi error . oleh karena itu \n <br>
dierkomendasikan menggunakan. (dot) untuk menambahkan string dengan data lain \n <br>";

$name = "Hitori Zaru";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

// Konversi Ke Number dan sebaliknya 
$valeuString = (string)100;
var_dump($valeuString);

$valeuInt = (int)"100";
var_dump($valeuInt);

$valeuFloat = (float)"100.11";
var_dump($valeuFloat);

// Mengakses Karakter

$nama = "Hitori";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;
echo $nama[5] . PHP_EOL;

// Variable Parsing
echo "Hello $name, Selamat Belajar" . PHP_EOL;

// Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;