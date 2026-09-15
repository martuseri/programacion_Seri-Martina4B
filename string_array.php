<?php

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

//Sin Limitador:
$array_fecha=explode("/",$fecha_1);
echo $array_fecha[1];
echo "<br>";

$array_fecha=explode ("-",$fecha_2);
echo $array_fecha[2];
echo "<br>";

//Ejemplo con variable números:
$array_numeros=explode(" ",$numeros);
echo $array_numeros[5];
echo "<br>";

//Con Limitador:
$array_numeros=explode(" ",$numeros,6);
echo $array_numeros[5];
echo "<br>";

//numeros negativos:
$array_numeros=explode(" ",$numeros,-1);
echo $array_numeros[4];