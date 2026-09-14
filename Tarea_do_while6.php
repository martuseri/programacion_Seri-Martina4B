<?php

#ejer.6

$Repeticiones=1;
$Kilos=15;

do{ 
    echo  $Repeticiones . " Repeticion=  ". $Kilos . "<br>";
    $Repeticiones++;
    $Kilos=$Kilos+15;
}while($Repeticiones<=12);


