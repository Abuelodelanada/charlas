<?php

$lista = ["manzana", "naranja", "sandia"];

var_dump($lista);
var_dump($lista[2]);

// Agregar elementos
$lista[] = "frutilla";
$lista = array_merge($lista, ["pera", "arándanos"]);
var_dump($lista);

// Eliminar elemento
$lista = array_diff($lista, ["pera"]);
unset($lista[0]);

// Consumir un elemento del final
$elemento = array_pop($lista);

// Consumir un elemento del principio
$elemento = array_shift($lista);

var_dump($lista);
