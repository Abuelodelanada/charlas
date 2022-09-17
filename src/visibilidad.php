<?php

class Madre
{
    public $public = 'Public de Madre' . PHP_EOL;
    protected $protected = 'Protected de Madre' . PHP_EOL;
    private $private = 'Private de Madre' . PHP_EOL;

    public function imprimePropiedades() {
        print($this->public);
        print($this->protected);
        print($this->private);
    }
}


class Hija extends Madre
{
    // Se pueden redeclarar las propiedades pública y
    // protegida, pero no la privada
    public $public = 'Public de Hija' . PHP_EOL;
    protected $protected = 'Protected de Hija' . PHP_EOL;

    public function imprimePropiedades() {
        print($this->public);
        print($this->protected);
        print($this->private);
    }
}

$madre = new Madre();
// print($madre->public);    // Funciona bien
// print($madre->protected); // Error Fatal
// print($madre->private);   // Error Fatal

$madre->imprimePropiedades();
// Public de Madre, Protected de Madre y Private de Madre

$hija = new Hija();
// print($hija->protected); // Error Fatal
// print($hija->private);   // Undefined
$hija->imprimePropiedades();
// Public de Hija, Protected de Hija, Undefined
