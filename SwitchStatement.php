<?php
echo "Kadang kita hanya butuh menggunakan kondisi sederhana di if statement,
\n seperti hanya menggunakan perbandingan ==
\n Switch adalah statement percabngan yang sama dengan if,
\n namun lebih sederhana cara pembuatannya
\n Kondisi di switch statement hanya untuk perbandingan ==
\n";

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik2" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
}

// Syntax Alternatif
$nilai1 = "C";

switch ($nilai1) :
    case "A":
        echo "Anda lulus dengan sangat baik2" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;
    echo "\n <br>";


$jurusan;

// switch():
//     case "A"
// endswitch;

// Tugas 
$total = 100000;
if($total >=10000){
    var_dump($total * 10/100);
} else if($total >= 50000){
    var_dump($total * 15/100);
} else if($total >= 100000){
    var_dump($total * 20/100);
} else if($total >= 200000){
    var_dump($total * 30/100);
} else {
    echo "TIdak Mendapatkan Diskon";
}




$a = 70000;

if($a >= 10000 && $a <50000){
    $d = 10/100 * $a;
    echo " diskon 10%: Rp$d";
    echo "<br>\n";
    echo "yang di bayar : Rp";
    echo($a - $d);
}else if($a >= 50000 && $a <100000){
    $d = 15/100 * $a;
    echo " diskon 15%: Rp$d";
    echo "<br>\n";
    echo "yang di bayar : Rp";
    echo($a - $d);
} else if($a >= 100000 && $a <200000){
    $d = 20/100 * $a;
    echo " diskon 20%: Rp$d";
    echo "<br>\n";
    echo "yang di bayar : Rp";
    echo($a - $d);
} else if($a >= 200000 ){
    $d = 25/100 * $a;
    echo " diskon 30% : Rp$d";
    echo "<br>\n";
    echo "yang di bayar : Rp";
    echo($a - $d);
}  else {
    echo "Tidak dapat diskon";
}