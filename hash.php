<?php

$clave="HolaMundo123";

$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);

$clave2="1234567";

if(password_verify($clave2,$clave_procesada)){
    echo "Las claves coinciden";
} else {
    echo "La claves no coinciden";
}