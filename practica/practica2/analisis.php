<?php
    $palabra = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");

    for ($i=0; $i < count($palabra); $i++) { 
        if($_REQUEST["palabra" . $i] == $palabra[$i]) {
            echo "La palabra ingresada es correcta" . "<br>";
        } else {
            echo "La palabra ingresada es incorrecta, y la palabra correcta es" . $palabra[$i] . "<br>";
        };
    };
?>