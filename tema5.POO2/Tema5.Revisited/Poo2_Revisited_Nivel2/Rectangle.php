<?php declare(strict_types=1);

class Rectangle extends Shape {
    public function calcularArea() : int {
        return $this->ancho * $this->largo;
    }
}

?>