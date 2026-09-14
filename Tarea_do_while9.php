<?php

#ejer.9

$pedidos=1;
$precio=3500;

do{
    echo  " pedidos " .  $pedidos . "=". ($pedidos*$precio) . "<br>";
    $pedidos++;
} while($pedidos<=10);

echo "<br>";
echo "Promoción finalizada";