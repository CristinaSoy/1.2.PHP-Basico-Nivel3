<?php declare(strict_types=1);

require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Cercle.php";

$rectangulo1 = new Rectangle(4,2);
echo $rectangulo1->calcularArea();


?>