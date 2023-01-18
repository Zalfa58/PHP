<?php
// Arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
// Secara garis besar, sebenarnya arrow function dan anonymous funcrion adalah dua hal yang sama
// Hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa digunakan,
// tidak seperti di anonymous function yang hasrus diebutkan secara manual menggunakan kata kunci use
// Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
// Arrow function di khusunya untuk pembuatan function yang sederhana

$firstName = "Hitori";
$lastName = "Zaru";

$sayHalloHito = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHalloHito();

$anonymousFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();