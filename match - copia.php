<?php
//Ejempo 1:
$a=2;

$x=10;
$y=9;
$z=7;
$e=2;

$resultado=match($a){
    10 => "Hola Mundo",
    $y,$e => "Valor es igual a Y o E",
    $z => " Valor es igual a Z",
    default => "No coincide con ninguna variable"
};
echo $resultado;
echo "<br>";
echo "<br>";

//Ejemplo 2: 
$edad=68;

$resultado= match(true){
    $edad >= 60 => "Eres de la 3ra edad",
    $edad >= 30 => "Eres adulto",
    $edad >=18 => "Eres adulto joven",
    default => "Eres un niño"
};

echo $resultado;
