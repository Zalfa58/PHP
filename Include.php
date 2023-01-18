<?php
/*Posisi Require dan Include
-Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan 
 include sesuai dengan yang kita inginkan
-Misal jika sampai kita salah menempatkan posisi require dan include bisa jadi kita malah
 memanggil function yang belum ada  */

 /*require_once dan include_once
 -Function require dan include akan selalu mengambil file yang kita inginkan 
 -Jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali-kali pula kita ambil
 -Hal ini kana menjadi masalah jika misal dalam file kita ambil terdapat definisi dunction, sehingga jika diambil berkali-kali
 akan menyebabkan erroe redeclere function
 -Untugnya di PHP terdapat funciton require_once dan include_oncle, function ini bisa mendeteksi jika kita sebelumnya pernah 
 mengambil file yang sama, maka tidak akan diambil lagi*/

include_once "Require&Include.php";
include_once "Require&Include.php";
// include "MyFunction.php";

echo sayHello("Hito", "Zaru");