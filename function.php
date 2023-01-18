<?php

echo "Function adalah block kode program yang akan belajar saat kita panggil
Sebelumnya kita sudah function isset(), count() dan lain-lain.
Untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan
nama function, kurung() dan diakhiri dengan block
Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan ()
Di bahasa pemrograman lain, function juga disebut dengan method(Function dan Method itu sama)\n";

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

// cara memanggil function
sayHello();
sayHello();

// Lokasi Function

echo "\n
PHP sangat flexible dalam pembuatan function
Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
Di PHP kita bebas membuat function diamanpun, bisa di dalam if statement. di dalam function, dan sebagainya
Namun perlu diingat jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa di gunakan\n";

$buat = true; //perlu dipastikan pernah di panggil(True)

if ($buat) {
    function hi ()
    {
        echo "Hi" . PHP_EOL;
    }
}

hi();