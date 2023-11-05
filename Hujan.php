<?php

include_once "Cuaca.php";

class Hujan implements Cuaca{

    public function beriklim(): void{
        echo "iklim hujan berderajat 10-15";
    }

    public function berpotensi(): void{
        echo "hujan dapat berpotensi mengakibatkan banjir";
    }
}