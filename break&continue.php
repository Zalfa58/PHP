<?php
echo "Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case
dalam switch\n
Sama dengan pada perulangan, break juga di gunakan untuk menghentikan seluruh perulangan.\n
Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini
lalu melanjutkan ke perulangan selanjutnya";

// Break
$counter = 1;

while (true) {
    echo "ini adakah for while ke-$counter" . PHP_EOL;
    $counter;

    if ($counter > 10) {
        break;
    }
}

// continue

for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Hello Continue" . $counter . PHP_EOL;
}