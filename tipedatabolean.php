<?php
echo "Benar : ";
var_dump(true);
echo "<br>";

echo "Salah : ";
var_dump(false);
echo "<br>";
echo "<br>";

$bilangan1=100;
$bilangan2=500;

if($bilangan1 > $bilangan2)
{
    echo "Nilai $bialngan1 lebih kecil besar dari $bilangan2";
    echo "<br>";
    var_dump($bialngan1 > $bilangan2);
}

else
 echo"nilai $bilangan1 lebih kecil dari $bilangan2";
 echo"<br>";
 var_dump($bialngan1 > $bilangan2);
 echo "<br>";
 echo "<br>";


$sukses = "Sudah";
if ($sukses == "Sudah") 
{
    echo "Alhamdulillah saya sudah sukses!!!";
    echo "<br>";
    var_dump($sukses=="Sudah");
    echo "<br>";
}

else
  echo "saya belum sukses, saya harus lebih berusaha lagi..";
  echo "<br>";
  var_dump($sukses=="Sudah");
?>

