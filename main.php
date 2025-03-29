<?php

$palabra = array("sol","luna","cielo");
$paralaDesordenada=array();

for ($i=0; $i<count($palabra); $i++){
    $palabraDesordenada[$i]=str_shuffle($palabra[$i]);
}
print_r($palabraDesordenada);

echo "
    <form action='analisis.php' method='post'>
    <input type='text' name='palabra0'>
    <input type='text' name='palabra1'>
    <input type='text' name='palabra2'>
    <button type='submit'>Enviar</button>
    </form>
";


?>