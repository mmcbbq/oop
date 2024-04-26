<?php
include "Auto.php";
include "Beifahrer.php";
include "Reifen.php";

$beifahrer1 = new Beifahrer("Donald","Trump",72, ["x"=>200,'y'=> 200], ["x"=>39,'y'=> -80]);
$beifahrer2 = new Beifahrer("Bill","Clinton",75, ["x"=>-200,'y'=> 300], ["x"=>500,'y'=> 700]);
$beifahrer3 = new Beifahrer("Obama","Barack",72, ["x"=>25,'y'=>-12], ["x"=>-1000,'y'=> -1000]);

$reifen1 =new Reifen(1,"sommer",5);
$reifen2 =new Reifen(2,"sommer",5);
$reifen3 =new Reifen(3,"sommer",5);
$reifen4 =new Reifen(4,"sommer",5);
$ersatz = new Reifen(5,"winter",10);
$reifen_array=["vorne links"=>$reifen1,"vorne rechts"=>$reifen2, 'hinten links'=>$reifen3,'hinten rechts'=>$reifen4];

$auto = new Auto("Chatgpt", 1000,"Ford",$reifen_array);
$auto->wechselReifen("vorne links",$ersatz);
var_dump($auto);

///** @var Beifahrer[] $fahrten */
//$fahrten = [$beifahrer1,$beifahrer2,$beifahrer3];
//$beifahrer1->rufeAuto($auto);
//var_dump($auto->getStandort());
//var_dump($auto->getKmstand());

//$testAuto = new Auto("test",0,"test");
//$testErg =[5,24.10,38.24,52.38,80.66,90.66,110.66,124.80,144.80,154.8];
//$testAuto->beschleunigen(50);
//foreach ($testPos as $index=>$testPo) {
//    $testAPo = ['x' => $testPo[0], 'y' => $testPo[1]];
//    $testAuto->fahren($testAPo);
//    $ist = $testAuto->getKmstand();
//    echo "soll: $testErg[$index] ist: $ist \n";
//}
//$testPos = [[3,4],[-10,-10],[0,0],[10,-10],[-10,10],[0,10],[0,-10],[10,0],[-10,0],[0,0]];
//
//foreach ($testPos as $index=>$testPo) {
//    if ($index%2 == 0){
//        $teststan = ['x'=>$testPo[0],'y'=>$testPo[1]];
////        var_dump($teststan);
//        $testziel = ['x'=>$testPos[$index+1][0],'y'=>$testPos[$index+1][1]];
////        var_dump($testziel);
//        echo "$testErg[$index]\n";
//        $i1 = $index+1;
//        echo "$testErg[$i1]\n";
//        $testbeifahrer = new Beifahrer("John",'Doe',123,$teststan,$testziel);
//        $testbeifahrer->rufeAuto($testAuto);
//    }
//
//}
//
//
//
//
//
//
//
//
//






//foreach ($fahrten as $beifahrer) {
//    $beifahrer->rufeAuto($auto);
//}


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

