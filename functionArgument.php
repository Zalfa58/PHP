<?php

// Kita bisa mengirim informasi ke function yang ingin kita panggil
// Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat
// Cara membuat argument sama seperti cara membuat Variabel
// Argument ditempatkan di dalam kurung () di deklarisasi function
// Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan, tanda koma (,)

// function Argument
function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Hitori");
sayHello("D");

// Argument Value & default

// PHP mendukung default argument value
// Fitur ini memungkinkan jika kita memanggil function tidak memasukkan parameter, kita bisa menentukan data default nya apa

function Hello($firstname = "Hitori", $lastname = "")
{
    echo "Hello $firstname $lastname" . PHP_EOL;
}

Hello("Zero");
Hello("Zaru");
Hello("Hitori", "D");

// Type Declaration

// Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
// Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang manggunakan argument dengan tipe data tertentu
// Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
// Jika tipe data value tidak sesuai, maka akan terjadi error
// Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe ini,
// tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

// Variable-length Argument List

// Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
// Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu menual mengirim array ke functionnya
// Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
// Untuk membuat varible-length argument list, kita bisa menggunakan tanda...(titik tiga kali) sebelum nama argument

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total" . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40,);
sumAll(...[10, 20, 30, 40]);

// Tugas
// function sumAll(...$angka)
// {
//     $total = 0;
//     foreach ($angka as $angka) {
//         $total  += $angka;
//     }
//     echo "Total" . impl
// }