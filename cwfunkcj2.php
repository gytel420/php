<?php  
function sumaTablicy($tablica) {
    $suma = 0;

    foreach ($tablica as $liczba) {
        $suma += $liczba;
    }

    return $suma;
}

$tablica = [5, 10, 15, 20];

echo sumaTablicy($tablica);
?>