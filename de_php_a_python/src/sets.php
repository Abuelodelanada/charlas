<?php

// En PHP no hay sets, entonces tenemos que asegurarnos de que
// los elementos en el array sean únicos con: array_unique()
$se_algo = ["PHP", "Python", "JS", "SQL", "Shell", "QBasic"];
$frameworks_web = ["Python", "PHP", "Java", "Elixir"];

// Intersección
$puedo_usar = array_intersect($se_algo, $frameworks_web);
var_dump($puedo_usar);
// "PHP", "Python"

// Unión
$todos_los_lenguajes = array_unique(array_merge($se_algo, $frameworks_web));
var_dump($todos_los_lenguajes);
// "PHP", "Python", "JS", "SQL", "Shell", "QBasic", "Java", "Elixir"

// Diferencia
$diferencia = array_diff($se_algo, $frameworks_web);
var_dump($diferencia);
// "JS", "SQL", "Shell", "QBasic"


