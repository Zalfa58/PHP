<?php
// Array sebagai MAP (MAP = Tanda/Pengganti Index atau no Urut)

// sebelum pakai map

$values = array(3, 8, 10);
var_dump($values);

$nama = array("adam","fahrizal");

$names = ["Adam", "Fahrizal"];
var_dump($names);
$names[0] = "Budi";
var_dump($names);
unset($names[1]); //Sebelum menggunakan map kita map kita harus menggunakan nomor urut index
var_dump($names);
$names[] = "Roger";
var_dump($names);
var_dump(count($names));

// map dan array di dalam array
$hito = array(
    "id" => "Hito",
    "name" => "Hitori",
    "age" => 17,
    "address" => array(
        "city" => "solo",
        "country" => "indonesia"
    )
);

var_dump($hito);

var_dump($hito["name"]);
var_dump($hito["address"]["country"]);

$budi = [
    "id" => "budi",
    "name" => "budi roger",
    "age" => 45,
    "address" => [
        "city" => "Jakarta",
        "country" => "indonesia"
    ]
];

var_dump($budi);


