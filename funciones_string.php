<?php

//Todo minúscula
$cadena_texto="Hola ";

echo strtolower($cadena_texto);

$cadena_texto=strtolower($cadena_texto);
echo $cadena_texto;

echo "<br>";

//Todo mayúscula 
$cadena_texto= "Hola Mundo ";

echo strtoupper($cadena_texto);

$cadena_texto=strtoupper($cadena_texto);
echo $cadena_texto;

echo "<br>";


//Primera letra del string en mayúscula
$cadena_texto= "hola mundo ";

echo ucfirst($cadena_texto);

$cadena_texto=ucfirst($cadena_texto);
echo $cadena_texto;

echo "<br>";


//Primera letra de cada palabra en mayúscula
$cadena_texto= "hola mundo ";

echo ucwords($cadena_texto);

$cadena_texto=ucwords($cadena_texto);
echo $cadena_texto;

echo "<br>";

