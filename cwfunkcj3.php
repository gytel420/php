<?php

function searchTablica($tablica, $szukana) {
    foreach ($tablica as $liczba) {
        if ($liczba == $szukana) {
            return true;
        }
    }

    return false;
}

$tablica = [5, 10, 15, 20];

if (searchTablica($tablica, 15)) {
    echo "Liczba " . $szukana . " znajduje się w tablicy";
} else {
    echo "Liczby " . $szukana . " nie ma w tablicy";
}

?>