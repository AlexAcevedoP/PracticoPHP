<?php

print_r($_REQUEST);

$palabra = array("sol","luna","cielo");


if($_REQUEST['palabra0']==$palabra[0]){
    echo "La palabra es correcta";
}else{
    echo "La palabra es incorrecta, la plabra es: ".$palabra[0];
}
if($_REQUEST['palabra1']==$palabra[1]){
    echo "La palabra es correcta";
}else{
    echo "La palabra es incorrecta, la plabra es: ".$palabra[1];
}   
if($_REQUEST['palabra2']==$palabra[2]){
    echo "La palabra es correcta";
}else{
    echo "La palabra es incorrecta, la plabra es: ".$palabra[2];
}
?>