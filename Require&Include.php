<?php
/*
Require dan Include
Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file 
Lebih baik dipisahkan ke beberapa file agar kode program tidak terlalu bertumpuk di satu file
PHP memiliki function require dinclude yang bisa kita gunakan untuk mengambil file php lain
Lantas apa bedanya require dan incluede?
Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan namun program akan tetap dilanjutkan*/

// File MyFunction.PHP
function sayHello(string $firstName, string $lastName): string
{
    return "Woi $firstName $lastName";
}

/*Posisi Require dan Include
-Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan 
 include sesuai dengan yang kita inginkan
-Misal jika sampai kita salah menempatkan posisi require dan include bisa jadi kita malah
 memanggil function yang belum ada  */

