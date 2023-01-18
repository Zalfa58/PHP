<?php
echo "Dalam PHP, if adalah salah satu kata kunci yang digunkanan untuk percabangan \n <br>
Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi \n <br>
Hampir di semua bahasa pemrograman mendukung if expression \n <br>";

// Sytax If Statement dan Else If Statement

if (1 < 2)
    echo 'succes full', "\n";

// if (expression) {
    // statement1;
    // statement2;
// }

$nilai = 70;
$absen = 90;

if ($nilai >= 88 && $absen >= 88) {
    echo "nilai anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "nilai anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "nilai anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "nilai anda D" . PHP_EOL;
} else {
    echo "nilai anda E" . PHP_EOL;
}

// if Statement dengan colon

$nilai1 = 69;
$absen1 = 90;

if ($nilai1 >= 88 && $absen1 >= 88) :
    echo "nilai anda A" . PHP_EOL;
 elseif ($nilai1 >= 70 && $absen1 >= 70) :
    echo "nilai anda B" . PHP_EOL;
 elseif ($nilai1 >= 60 && $absen1 >= 60) :
    echo "nilai anda C" . PHP_EOL;
 elseif ($nilai1 >= 50 && $absen1 >= 50) :
    echo "nilai anda D" . PHP_EOL;
 else :
    echo "nilai anda E" . PHP_EOL;
 endif;
 echo "<br>";

//  tugas
 $uang = 1000000;
 $total = 0;
 
 if ($uang >= 10000 && $uang >= 10000) :
     var_dump($uang * 10/100);
  elseif ($uang >= 50000 && $total >= 50000) :
     var_dump($total * 15/100);
  elseif ($uang >= 100000 && $total >= 100000) :
     echo "nilai anda C" . PHP_EOL;
  elseif ($uang >= 50 && $total >= 50) :
     echo "nilai anda D" . PHP_EOL;
  else :
     echo "$total" . PHP_EOL;
  endif;
