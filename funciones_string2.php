<?php

//Contar caracteres de un string:
$cadena_de_texto="hola mundo";

$longitud=strlen($cadena_de_texto);

echo $longitud;
echo "<br>";

echo $cadena_de_texto." tiene ".$longitud." caracteres <br> ";

//Contar cantidad de palabras:
$palabras=str_word_count($cadena_de_texto);
echo $palabras;
echo "<br>";

echo $cadena_de_texto." tiene ".$palabras." palabras";