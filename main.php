<?php

$palabra = array("sol","luna","cielo","estrella","nube","viento","lluvia","rayo","trueno","relampago","tormenta","neblina","niebla","nieve","granizo","hielo","frio","calor","humedad","sequedad","viento fuerte","viento suave");

$fomr="<form action='analisis.php' method='post'>";
for ($i=0; $i<count($palabra); $i++){
    $form.= "La palabra: ".str_shuffle($palabra[$i])." ".
    "<input type='text' name='palabra".[$i]."'>".
    "<br>";
}
print_r($palabraDesordenada);

$button = "<button type='submit'>Enviar</button>";
$formCiErre= "</form>";

echo $form.$button.$formCiErre;


?>