<?php
// STRING FUNNCTION
/*Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi daya string
Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
https://www.php.net/manual/en/ref.string.php */

/* Contoh String Function
join() / implode() |:| Menggabungkan array menjadi string
explode()          |:| Memecah string menjadi array
strtolower ()      |:| mengubah string menjadi lowercase
strtoupper()       |:| Mengubah string menjadi uppercase
substr()           |:| mengambil sebagian string
trim()             |:| menghapus whitespace di depab dab belakang string*/

var_dump(join(",", [1, 2, 3, 4, 5]));
var_dump(explode("", "Adam Fahrizal H"));
var_dump(strtolower("ADAM FAHRIZALH"));
var_dump(strtoupper("Adam Fahrizal"));
var_dump(trim("    Adam    "));
var_dump(substr("Adam Fahrizal", 0, 3));

