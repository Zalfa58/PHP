<?php
// PHP mendukung konsep yang bernama variable function
// Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
// Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(). jika ingin menambahkan argument,
// kita bisa menggunakan $namaVariable(argument)

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// penggunaan Variable Function

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Hitori", "strtoupper", "sampleFunction");
sayHello("Hitori", "strtoupper");