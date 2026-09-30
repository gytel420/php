<?php

$owoce = ["Jabłko", "Banan", "Pomarańcza", "Mango"];
echo "<ul>";
for ($i = 0; $i < 2; $i++) {
echo "<li>" . $owoce[$i] . "</li>";
}
$i = 2;
while ($i < 4) {
echo "<li>" . $owoce[$i] . "</li>";
$i++;
}
echo "</ul>";
?>