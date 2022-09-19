<?php

function cargarNafta(int $litros) :string {
    return "El auto cargó $litros de nafta";
}

print(cargarNafta([10]));
//PHP Fatal error:  Uncaught TypeError...
