<?php


$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "Frutillas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melones"=>17,
    "Manzanas"=>9
];


$productos= [
    ["codigo" => "A0001", "descripción" => "Mouse"],
    ["codigo" => "A0002", "descripción" => "Teclado"],
    ["codigo" => "A0003", "descripción" => "Monitor"],
    ["codigo" => "A0004", "descripción" => "Impresora"]
];


//Array Escalar:
foreach($laptop as $clave => $valor){
  echo $clave." -   ".$valor."<br>";
}


echo "<br>";


//Array Asociativo:
foreach($frutas as $clave => $valor){
  echo "Hay ".$valor." ".$clave." en el inventario"."<br>";
} 


echo "<br>";

//Array Multidimensional:

foreach($productos as $prod){
  echo $prod["codigo"]." - ".$prod["descripción"]."<br>";    
}