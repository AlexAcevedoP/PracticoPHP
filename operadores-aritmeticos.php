<?php

$valorA = 5;
$valorB = 2;

$suma = $valorA + $valorB;
echo "suma: ";
var_dump($suma); //7
echo "=======================\n";
$resta = $valorA - $valorB;
echo "resta: ";
var_dump($resta); //3
echo "=======================\n";
$multiplicacion = $valorA * $valorB;
echo "multiplicacion: ";
var_dump($multiplicacion); //10
echo "=======================\n";
$division = $valorA / $valorB;
echo "division: ";
var_dump($division); //2.5
echo "=======================\n";
$modulo = $valorA % $valorB; //el módulo es el resto de la división
echo "modulo: ";
var_dump($modulo); //1
echo "=======================\n";
$potencia = $valorA ** $valorB; //Elevar a la potencia
echo "potencia: ";
var_dump($potencia); //25
echo "=======================\n";


?>