<?php
//las funciones permiten reutilizar código y hacerlo más legible
function saludar($nombre,$apellido){
    echo "\nHola ".$nombre." ".$apellido." esta es la función saludar";
}

function sumar($numeroA,$numeroB){
    echo "el resultado en la función sumar es:". $numeroA+$numeroB;
}

function sumarNumeros($numeros){//función que recibe un arreglo de números y los suma
    $suma=0;
    for($i=0; $i<5;$i++){ //for que recorre el arreglo
        $suma = $suma + $numeros[$i];
    }
    echo "La suma de los números en la funcion sumarNumeros es: ".$suma;

}

//en la documentación de PHP se pueden encontrar las funciones que se pueden utilizar
//https://www.php.net/manual/es/index.php

echo "Función ejemplo: is_array\n";
//is_array permite saber si una variable es un arreglo
$nombres=array("Alex","Juan","Pedro");  
is_array($nombres);



// se llaman las funciones con los parámetros que requieren
saludar("Alex","Acevedo");
echo "\n=======================\n";
sumar(8,4);
echo "\n=======================\n";
$numeros=array(1,2,3,4,5); //se pasan los numeros que se quieren sumar en un arreglo
sumarNumeros($numeros);
echo "\n=======================\n";
echo "la función is_array retorna: ";
var_dump(is_array($nombres));

?>