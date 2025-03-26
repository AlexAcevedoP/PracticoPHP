<?php

$valorA = true;
$valorB= true;
$valorC= false;

//and es un operador lógico que devuelve true si ambos valores son true y false en cualquier otro caso
$resultado = $valorA && $valorB; 
$resultado2 = $valorA && $valorC; 

echo "&& o and\n";
echo "resultado: ";
var_dump($resultado); //true
echo "resultado2: ";
var_dump($resultado2); //false
echo"=======================\n";

//or es un operador lógico que devuelve true si al menos uno de los valores es true y false en cualquier otro caso
$resultado3 = $valorA || $valorB;
$resultado4 = $valorA || $valorC;

echo "|| o or\n";
echo "resultado3: ";
var_dump($resultado3);//true
echo "resultado4: ";
var_dump($resultado4);//true
echo"=======================\n";

//xor es un operador lógico que devuelve true si uno de los valores es true y el otro false, en cualquier otro caso devuelve false
echo "xor\n";
$resultado5 = $valorA xor $valorB;
$resultado6 = $valorA xor $valorC;
echo "resultado5: ";
var_dump($resultado5);//false   
echo "resultado6: ";
var_dump($resultado6);//true
echo"=======================\n";

//not es un operador lógico que devuelve true si el valor es false y false si el valor es true
echo "! o not\n";   
$resultado7 = !$valorA;
echo "resultado7: ";
var_dump($resultado7);//false   
echo"=======================\n";

?>

