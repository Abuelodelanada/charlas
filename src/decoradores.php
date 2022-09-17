<?php

$validar_div = function($func) {
    $envoltorio_func = function($a, $b) use($func){
        if($b === 0){
            print("No podés dividir por 0" . PHP_EOL);
            return;
        }
        $c = $func($a, $b);
        return $c;
    };
    return $envoltorio_func;
};

$division = function($a, $b) {
    return $a / $b;
};

$division = $validar_div($division);
print($division(3, 0));


