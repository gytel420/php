
<?php

function highestNumber($numbers) {
    $highest = $numbers[0];
    $position = 0;

    foreach ($numbers as $index => $number) {
        if ($number > $highest) {
            $highest = $number;
            $position = $index;
        }
    }

    return "Największa liczba to: " . $highest . ", jej miejsce to: " . ($position + 1);
}

echo highestNumber([5, 10, 50, 20]);

?>
