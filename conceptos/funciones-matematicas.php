<?php 
 // en la documentacion de php.net se pueden encontrar funciones matematicas
    // http://php.net/manual/es/ref.math.php
echo "función MAX\n";
echo max(1, 3, 5, 6, 7);  // 7

echo "\nfunción MIN\n";
echo min(1, 3, 5, 6, 7);  // 1

echo "\nfunción rand\n";
echo rand(max:500,min:1); // número aleatorio

echo "\nfunción raiz cuadrada\n";
echo sqrt(9); // 3

echo "\nfunción redondear\n";
echo round(3.4); // 3

echo "\nfunción redondear hacia arriba\n";
echo ceil(3.4); // 4

echo "\nfunción redondear hacia abajo\n";
echo floor(3.4); // 3

echo "\nfunción potencia\n";
echo pow(2, 3); // 8

?>