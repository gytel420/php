<?php

function highestNumber($numbers) {
    $highest = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $highest) {
            $highest = $number;
        }
    }

    return $highest;
}
echo highestNumber([5, 10, 50, 20]);


?>