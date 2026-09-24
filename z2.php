<?php

$tablica = [];

for ($i = 1; $i <= 100; $i++) {
    $tablica[] = $i;
}

$i = 0;

while ($i < 100) {
    echo $tablica[$i] . "<br>";
    $i++;
}

?>