<?php

$liczby = [];

for ($i = 2; $i <= 40; $i += 2) {
    $liczby[] = $i;
}

$i = 0;

while ($i < 20) {
    echo $liczby[$i] . "<br>";
    $i++;
}

?>