<?php declare (strict_types=1);

require_once "Animal.php";
require_once "Gos.php";
require_once "Gat.php";

$miPerro = new Gos("Rumba");
$miPerro->parlar();

$miGato = new Gat("Tigre");
$miGato->parlar();


?>