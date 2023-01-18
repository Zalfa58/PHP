<?php
echo "Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement,\n 
lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y\n
Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator\n
Ternary operator menggunakan kata kunci (?) dan (:)\n";

$gender = "";

$hi = null;
if ($gender == "PRIA") {
    $hi = "Hi BRO";
} else if ($gender == "Wanita"){
    $hi = "Hi Nona";
} else if ($gender == ""){
    $hi = "Alien?";
} 

// T OP
$gender1 = "PRIA";
$hi1 = $gender1 == "PRIA" ? "Hi Bro!" : "";
$hi1 = $gender1 == "Wanita" ? "Hi Nona!" : "";
$hi1 = $gender1 == "" ? "Alien?" : "";

echo $hi . PHP_EOL;
echo $hi1 . PHP_EOL;