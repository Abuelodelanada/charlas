<?php

class Auto
{
    private $enMarcha = false;
    private $estadoFiltroAire = "Hecho mierda";
    public $cilindradaLitros = 4.1;

    public function arrancar() {
        $this->enMarcha = true;
        return "El auto arrancó";
    }

    public function cambiarFiltro() {
        $this->estadoFiltroAire = "Nuevísimo!";
        return "El filtro ahora está joya!";
    }
}


// $auto = new Auto();
// print($auto->cambiarFiltro() . PHP_EOL);
// print($auto->arrancar() . PHP_EOL);
// var_dump($auto);


$river = [
    "ultimosTitulosInternacionales" => [
        "Libertadores 2018",
        "Libertadores 2015"
    ],
    "ultimosCampeonatos" => [2021, 2014],
    "totalTorneosNacionales" => 51,
    "totalTorneosInternacionales" => 18,
    "ascendioPorDecretro" => false,
];

var_dump($river);

