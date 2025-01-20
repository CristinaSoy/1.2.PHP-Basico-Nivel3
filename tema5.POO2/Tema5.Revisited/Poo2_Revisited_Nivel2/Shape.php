<?php declare(strict_types=1);

abstract class Shape {
protected int $alto;
protected int $ancho;

    protected function __construct(int $largo, int $ancho) {
        $this->alto = $alto;
        $this->largo = $largo;
    }

    abstract protected function calcularArea();
}





?>