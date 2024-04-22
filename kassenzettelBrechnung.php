<?php
include "Kassenzettel.php";
include 'Artikel.php';

$name = $_POST['artikel'] ;
$einzelpreis = $_POST['einzelpreis'];
$anzahl = $_POST['anzahl'];
$mwst = $_POST["mwst"] ;

//["Apfel", 'hallo',"Laptop"]
$artikel_array =[];
foreach ( $name as $index => $item) {
    $artikel_array[] = new Artikel($item,$einzelpreis[$index],$mwst[$index] );

}



$kassenzettel = new Kassenzettel($anzahl,$artikel_array);

//var_dump($kassenzettel->getArtikel()[0]->getPreis());
$kassenzettel->printName();
?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>

    <div>
<!--        --><?php
//        foreach ($kassenzettel->getArtikel() as $item) {
//            $name = $item->getName();
//            $
//            echo" <div></div> ";
//
//        }
//
//        ?>



    </div>
</head>
<body>

</body>
</html>






