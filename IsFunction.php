<?php
/*IF FUNCTION
PHP memiliki banyak sekali function dengan prefix is_
Funtion-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data 
https://www.php.net/manuak/en/ef.var.php*/

/*CONTOH IS FUNCTION 
is_string()   |Apakah tipe data string
is_bool()     |Apakah tipe data boolean
is_int()      |Apakah tope data number integer
is_float()    |Apakah tipe dara floating point
is_array()    |Apakah tipe data array
is_callable() | Apakah tipe data callable */

$data = "null";

var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_string($data));
var_dump(is_null($data));