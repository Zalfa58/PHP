<?php
// For Each

echo "kadang kita bisa mengakses data array menggunakan perulangan
Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter,
lalu mengakses array menggunakan counter yang kita buat
Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses
seluruh data di Array secara otomatis\n";

// kode tanpa for each

$names = ["Hitori", "D", "Zaru"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

// kode For Each

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

// kode For Each dengan key

$person = [
    "first_name" => "Hitori",
    "middle_name" => "D",
    "last_name" => "Zaru"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

// Tugas
function Lingkaran(int $Jari)
{
    $luas = 3.14 * $Jari * $Jari ;
    $kell = 2 * 3.14 * $Jari;

    for ($perulangan = 1; $perulangan <= 10; $perulangan++){
        echo "luas"$tinggi adalah $luas 
    }
}

Lingkaran(100,600);