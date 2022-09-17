<?php

interface Bovino
{
    public function comer(string $comida, int $kilos);
    public function caminar(float $velocidad, float $distancia);
}

final class Vaca implements Bovino
{
    public function comer(string $comida, int $kilos) {
        print("Vaca comiendo $kilos kilos de $comida" . PHP_EOL);
    }

    public function caminar(float $velocidad, float $distancia) {
        print("Vaca caminando $distancia Km a $velocidad Km/h" . PHP_EOL);
    }
}

class Humano
{
    public function comer(string $comida, float $kilos) {
        print("Humano comiendo $kilos kilos de $comida" . PHP_EOL);
    }

    public function caminar(float $velocidad, float $distancia) {
        print("Humano caminando $distancia Km a $velocidad Km/h" . PHP_EOL);
    }
}

function ingresarAlCampo(Bovino $animal) {
    $animal->comer("pasto", 5);
    $animal->caminar(30.1, 3.2);
}

$vaca = new Vaca();
ingresarAlCampo($vaca);

$humano = new Humano();
ingresarAlCampo($humano);


