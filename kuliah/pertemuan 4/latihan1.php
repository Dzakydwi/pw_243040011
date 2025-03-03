<?php
//pengulangan / LOOPING
//for, while, do while, foreach
//while
//2. kondisi terminasi/ saat looping

$i = 10;
while ($i >= 1) {
    echo "Hello World $i x <br>";
    $i = $i - 1;
}

echo "<hr>";


for ($i = 2; $i <= 10; $i = $i + 2) {
    echo "Hello World $i x <br>";
}
