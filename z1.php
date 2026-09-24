<?php

$age = [];

$age['jabko'] = "2";
$age['truskawka'] = "3";
$age['wisnia'] = "10";
$age = ['kiwi' => '5'] + $age;
$age['liczi'] = "10";

array_splice($age, 2, 1);

echo "Kiwi: " . $age['kiwi'] . "<br>";
echo "Jabko: " . $age['jabko'] . "<br>";
echo "Wisnia: " . $age['wisnia'] . "<br>";
echo "Liczi: " . $age['liczi'];

?>