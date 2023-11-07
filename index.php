<?php
include_once "Hujan.php";
include_once "Salju.php";

$cuaca1 = New Hujan(); 
$cuaca1->beriklim();
echo "<br>";
$cuaca1->berpotensi();
echo "<br>";
$cuaca2 = New Salju(); 
echo "Cuaca Salju Beriklim : "; 
$cuaca2->beriklim();
echo "<br>";
echo "Cuaca Salju Berpotensi : "; 
$cuaca2->berpotensi();
