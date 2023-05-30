<?php

    $edad = readline("¿Qué edad tiene el estudiante que deseas registrar?");
    
    if (is_numeric($edad)){
        if ($edad > 0 && $edad < 5){
            echo "El estudiante con $edad años de edad tendrá sus juguetes en la parte inferior de la bodega.\n";
        } elseif ($edad >= 5 && $edad <= 7){
            echo "El estudiante con $edad años de edad tendrá sus juguetes en la parte media de la bodega.\n";
        } elseif ($edad > 7){
            echo "El estudiante con $edad años de edad tendrá sus juguetes en la parte superior de la bodega.\n";
        }
    }else{
        echo "El estudiante aún no tiene espacio de almacenamiento en la bodega de al lado.\n";
    };

    function arbol($pisos){
        for($i = 0;$i < $pisos; $i++){
            echo str_repeat("*", $i) . "\n";
        };
    };

    arbol(11);

?>