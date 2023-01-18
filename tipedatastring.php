<?php
echo 'Nama : ';
echo 'Adam Fahrizal H';
echo "\n";

echo "Nama : ";
echo "Adam\t Fahrizal\n";

// heredoc lebih unggul dari nowdoc
echo <<<Hito
Belajar PHP 
menggunakan heredoc\n
Hito;

echo <<<'Hito'
Belajar PHP 
menggunakan nowdoc
Hito;