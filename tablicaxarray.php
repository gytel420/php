<?php

$cars = [];

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$a1 = array($cars[0], $cars[1], $cars[2]);

array_splice($a1, 0, 1);

print_r($a1);

?>