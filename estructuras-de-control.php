<?php

$valorA = 5;
//if permite evaluar si una condición es verdadera o falsa
echo "=======================\n";
echo "Estructura if-else\n";
if($valorA==5){
    echo "El valor es igual a 5";
}else{
    echo "El valor es diferente de 5";
}

echo "\n=======================\n";

//while se ejecuta mientras la condición sea verdadera
echo "Estructura while\n";
$i=0;
$a=0;
while($i<=10){
    echo $i++;
}
echo "\n=======================\n";
//do-while se ejecuta al menos una vez y luego se ejecuta mientras la condición sea verdadera
do{
    echo $a++;
}while($a<=10);
echo "\n=======================\n";

//for se ejecuta mientras la condición sea verdadera
echo "For y for each\n";
$arr=array(1,2,3,4,5,6,7,8,9,10);
echo "For: ";
for($i=0;$i<5;$i++){//for(inicialización;condición;incremento)
   
    echo $arr[$i];//imprime el valor del arreglo en la posición i  
}
echo "\nForeach: ";
foreach($arr as $value){//foreach recorre el arreglo y asigna el valor a la variable $value
    
    echo $value;
}
//switch permite evaluar una variable y ejecutar un bloque de código dependiendo del valor de la variable
echo "\n=======================\n";
switch($valorA){
    case 1:
        echo "El valor es 1";
        break;
    case 2:
        echo "El valor es 2";
        break;
    case 3:
        echo "El valor es 3";
        break;
    case 4:
        echo "El valor es 4";
        break;
    default:
        echo "El valor no es ninguno de los anteriores";
        break;
}
?>