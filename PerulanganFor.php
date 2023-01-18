<?php
echo "for(init  statement; kondisi; post statement){
    // block perulangan
}\n
Init statement akan dieksekusi hanya sekali di awak sebelum perulangan \n
Kondisi akan dilakukan perngecekan dalam setiap perulangan, jika true perulangan akan dilakukan
jika false perulangan akan berhenti\n
Post statement akan dieksekusi setiap kali diakhir perulangan\n
Init statement, kondisi dan post statement tidak wajib diisi jika kondisi tidak diisi berarti kondisi
selalu bernilai true\n";

// perulangan tanpa henti
// for ( ; ; ) {
//     // echo "Hello For Loop" . PHP_EOL;
// }

// counter1
$counter = 1;

for (; $counter <= 10;) {
    echo "Hello For Loop ke-$counter :" . $counter . PHP_EOL;
    $counter++;
}

// init statement
for ($counter= 1; $counter <= 10;) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

// post statement
for ($counter= 1; $counter <= 10; $counter++) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
}

// Syntax
for ($counter= 1; $counter <= 10; $counter++) :
    echo "Hello For Loop : " . $counter . PHP_EOL;
endfor;