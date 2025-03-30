<?php

$palabra = array("sol", "luna", "cielo", "estrella", "nube", "viento", "lluvia");

$form = "<form action='analisis.php'>";
for ($i = 0; $i < count($palabra); $i++) {
    $form .= "La palabra: " . str_shuffle($palabra[$i]) . " " .
        "<input type='text' name='palabra$i'>" .
        "<br>";
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";

echo $form . $button . $formCierre;

?>