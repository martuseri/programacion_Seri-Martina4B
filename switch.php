<?php

//Ejemplo 2:
    $dia= 5;

    switch($dia){
        case 1:
            echo "Hoy es Lunes "  ;
            echo "<br>";
        break;
        case 2:
            echo "Hoy es Martes";
            echo "<br>";
        break;
        case 3:
            echo "Hoy es Miércoles";
            echo "<br>";
        break;
         case 4:
            echo "Hoy es Jueves";
            echo "<br>";
        break;
         case 5:
            echo "Hoy es Viernes";
            echo "<br>";
        break;
         case 6:
            echo "Hoy es Sabado";
            echo "<br>";
        break;
         case 7:
            echo "Hoy es Domingo";
            echo "<br>";
        break;
        default: 
            echo "Ingrese un número válido ";
            echo "<br>";
    }

    //Ejemplo 1:
    $fruta= "cereza";

    switch($fruta){
        case "cereza":
            echo "eres una cereza";
        break;
        case "kiwi":
            echo "eres un kiwi";
        break;
        case "melon":
            echo "eres un melon";
        break;
        default: 
            echo "no eres una cereza, ni un kiwi, ni un melon ";
    }