<?php

$lenguajes = [
    "se_algo" => ["PHP", "Python", "JS", "SQL", "Shell", "QBasic"],
    "quisiera_aprender" => ["Lisp", "Elixir", "Go", "C++", "C"],
    "vade_retro" => ["Java", "C#"]
];

// Agregar elemento
$lenguajes["ni_fu_ni_fa"] = ["Rust", "TypeScript"];

// Obtener elemento
var_dump($lenguajes["vade_retro"]);

// Eliminar elemento
unset($lenguajes["ni_fu_ni_fa"]);
var_dump($lenguajes);
