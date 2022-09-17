<?php

$frutas = ["manzana", "sandia", "pomelo", "mandarina"];
$empiezan_con_m = [];

foreach ($frutas as $fruta) {
    if (str_starts_with($fruta, "m")) {
        $empiezan_con_m[] = $fruta;
    }
}
var_dump($empiezan_con_m);

// Intentando hacer listas por comprensión en PHP
$frutas = ["manzana", "sandia", "pomelo", "mandarina"];
$empiezan_con_m = array_filter($frutas, function($fruta){return str_starts_with($fruta, "m");});
var_dump($empiezan_con_m);


