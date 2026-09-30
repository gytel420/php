<?php

$owoce = [
    "japko" => 2,
    "banan" => 4,
    "pomarancz" => 5,
    "mango" => 6,
    "musztarda" => 7,
];

echo "<table border='1'>";
echo "<tr><th>Owoc</th><th>Cena</th></tr>";

foreach ($owoce as $owoc => $cena) {
    echo "<tr>";
    echo "<td>" . $owoc . "</td>";
    echo "<td>" . $cena . " zł</td>";
    echo "</tr>";
}

echo "</table>";

?>