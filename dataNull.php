<?php
echo "Nilai NUll merepresentasikan sebuah variable tanpa nilai. \n <br>
Null dapat menghapus nilai variable atasnya \n";

$name = "Adam";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// menghapus Variable menggunakan unset
$contoh = "Adam";
unset($contoh);

$contoh = "Hito";
$contoh = null;

var_dump(isset($contoh));