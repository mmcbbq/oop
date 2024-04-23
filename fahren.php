<?php
include "Auto.php";
include "Beifahrer.php";

$bmw = new Auto("Bob", 50000, "BMW");
$beifahrer1 = new Beifahrer("Donald","Trump",72);
$beifahrer2 = new Beifahrer("Bill","Clinton",75);
$beifahrer3 = new Beifahrer("Obama","Barack",72);

$bmw->einsteigenBeifahrer($beifahrer1);
var_dump($bmw->getBeifahrer()->getFname());
//var_dump($bmw->getFahrer());
//var_dump($bmw->getMarke());
//var_dump($bmw->getGeschwindigkeit());
//$bmw->beschleunigen(80);
//var_dump($bmw->getGeschwindigkeit());
//$bmw->bremsen(50);
//var_dump($bmw->getGeschwindigkeit());
//$bmw->einsteigenBeifahrer("Alice");
//var_dump($bmw->getBeifahrer());
//$bmw->aussteigenBeifahrer();
//var_dump($bmw->getBeifahrer());

