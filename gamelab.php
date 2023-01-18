<?php

// $counter = 1;
// $n = 7;
// for ($counter = 1; $counter <= $n; $counter++) {
//     echo $hasil = $counter**2;
    
// }





// if ($gaji[0] > $gaji[1]) {
    
//     $n = array_search($gaji[0],$gaji);
//     echo "$nama[$n]";
    
// }
// function kembali(){
$nama = array("Adam", "Fahrizal", "Hito");
$gaji = array(7999999999999000000 ,9000000, 6888800000);

    // echo(max($gaji) . "<br>");
    // echo array_search(max($gaji),$gaji);
    // echo "<br";
    // var_dump($nama[array_search(max($gaji),$gaji)]);
    // echo "<br";
    echo "Nama Penjualan Tertinggi Adalah ";
    echo ($nama[array_search(max($gaji),$gaji)]);
    echo "<br>";
    echo "Dengan Nilai Penjualan Sebesar ";
    echo(max($gaji) . "<br>");

// }

// kembali();

/*
for ($i = 0; $i < count($nama); $i++) {
    

    if ($gaji[0] > $gaji[$i]) {
       
        $n = array_search($gaji[0],$gaji);
        return "$nama[$n]";}
   else {
        $n =  array_search($gaji[$i],$gaji);
        return "$nama[$n]";
    }   


    echo "$nama" . PHP_EOL;
}
*/