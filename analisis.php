<?php

$palabra = array("sol", "luna", "cielo", "estrella", "nube", "viento", "lluvia");

for ($i=0; $i < count($palabra) ; $i++) { 
    if($_REQUEST['palabra'.$i]==$palabra[$i]){
        echo "La palabra es correcta"."<br>";
    }else{
        echo "La palabra es incorrecta, la plabra es: ".$palabra[$i]."<br>";
    }
}

?>