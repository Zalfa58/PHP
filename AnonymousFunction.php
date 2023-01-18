<?php
// Anonymous function tanpa nama di PHP disebut juga dengan Closure
// Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
// Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Hitori");
$sayHello("Zaru");

// Anonymous function sebagai argument

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Sayonara", function (string $name) {
    return strtoupper($name);
});

$filterFunction = function(string $name): string {
    return strtoupper($name);
};

sayGoodBye("Hitori", $filterFunction);

// Mengakses Variable di Luar Closure

// Secara default, Anonymous function tidak bisa mengakses variable yang terdapat diluar function
// Jika kita ingin menggunakan variable yang terdapat duluar Anonymous functionn, tidak perlu secara explicit menyebutkannya
// menggunakan kata kunci use lalu diikuti variable- variavle yang ingin kita gunakan

$firstName = "Hitori";
$lastName = "D";

$sayHelloHito = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloHito();

$firstName = "adam";//jika di ubah tidak akan berubah yang pertama di buat akan permanen jadi tidak dapat di rubah
$lastName = "fahrizal";
$sayHelloHito();