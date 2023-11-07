<?php

include_once "Cuaca.php";

class Salju implements Cuaca{

    public function beriklim(): void{
        echo "Tropis";
    }

    public function berpotensi(): void{
        echo "Hipotermia";
    }
}