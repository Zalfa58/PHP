<?php
function nilai_akhir(int $keterampilan, int $sikap, int $project)
{
    if ($keterampilan >= 90 && $sikap >= 90 && $project >= 90) {
        for ($perulangan = 1; $perulangan <= 10; $perulangan++){
            echo '<p><mark style="background: green;">anda lulus dengan nilai A</mark></p>' . PHP_EOL; }} 
     elseif ($keterampilan >= 80 && $sikap >= 80 && $project >= 80) {
        for ($perulangan = 1; $perulangan <= 10; $perulangan++){
            echo '<p><mark style="background: orange;">anda lulus dengan nilai B</mark></p>' . PHP_EOL; }} 
     elseif ($keterampilan >= 75 && $sikap >= 75 && $project >= 75) {
        for ($perulangan = 1; $perulangan <= 10; $perulangan++){
            echo '<p><mark style="background: yellow;">anda lulus dengan nilai C</mark></p>' . PHP_EOL; }} 
     else {
        for ($perulangan = 1; $perulangan <= 10; $perulangan++){
            echo '<p><mark style="background: red;">Tidak Lulus</mark></p>' . PHP_EOL;}
        }  
     
}

nilai_akhir(90, 90, 90);
nilai_akhir(80, 99, 99);
nilai_akhir(75, 90, 90);
nilai_akhir(50, 99, 90);


for (kondisi){
    if(kondisi){
        
    }
}