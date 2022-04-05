<?php

include_once 'ElectronicItem.php';
include_once 'Television.php';
include_once 'Console.php';
include_once 'Microwave.php';
include_once 'Controller.php';

class Output {

    public function teste() {
       echo "teste";
       $intance1 = new Television();
       $intance1->setPrice(1);
       $intance2 = new Controller();
       $intance2->setPrice(2);
       $intance3 = new Console();
       $intance3->setPrice(3);
       $intance4 = new Microwave();
       $intance4->setPrice(4);
       
       echo $intance1->getPrice();
       echo $intance2->getPrice();
       echo $intance3->getPrice();
       echo $intance4->getPrice();

       $intance1->addExtra($intance2);
    }

}

$teste = new Output();
$teste->teste();

?>