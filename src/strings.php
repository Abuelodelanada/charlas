<?php

$string1 = "Hola PHP!";

if ($string1) {
    print($string1 . PHP_EOL);
}

// Concatenar strings
$string2 = "Hola" . " PHP!";
print($string2 . PHP_EOL);
print(strlen($string2) . PHP_EOL);

// Formateo de strings
$var1 = "Ñandú";
$var2 = "de las Pampas";

print(sprintf("El %s %s se la banca". PHP_EOL, $var1, $var2));
print("El $var1 $var2 se la banca". PHP_EOL);

print($var1[0]);
print(mb_substr($var1, 0, 1). PHP_EOL);
