<?php
// Expression
$a = 5;
$b = $a;
echo "angka 5 adalah Valeu. angka 5 dan A itu adalag Expression";

// Expression Complex
function getValue()
{
    return 100;
}

$value = getValue();
echo "getValue() adalah expression, karena getValue() bernilai angka 100.";

// Statement
$name = "Hitori Zaru";

echo $name;

$date = new DateTime();
echo "Kalimat lengkap adalah Statement";

// Block

function runApp($name)
{
    echo "start program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program " . PHP_EOL;

}

runApp('hitori');