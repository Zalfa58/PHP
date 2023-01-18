<?php
echo "Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP\n
Dan hal yang paling repot di PHP adakah mengecek apakah sebuah data atau tidak, dan juga 
apakah data tersebut isinya null atau bukan\n
Biasanya untuk melakukan itu perlu menggunakan pengecekan if stetement dengan function
isset($variable)\n
Namun untungnya di php ada null coalescing operator menggunakan tanda (??)\n";

$data = [
    "action" => "Create"
];

if (isset($data['action'])) {
    $action = $data['actio'];
} else {
    $action = 'nothing';
}

$action = $data['action'] ?? 'nothing';

echo $action;