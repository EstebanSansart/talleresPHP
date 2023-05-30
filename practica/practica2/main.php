<?php
    $palabra = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");
    $form = "<form action='analisis.php'>";

    for ($i=0; $i < count($palabra); $i++) { 
        $form .= "La palabra: " . str_shuffle($palabra[$i]) . " " .
        "<input type='text' name='palabra" . $i . "'>" .
        "<br>";
    };

    $button = "<input type='submit'>Send</input>";
    $formCierre = "</form>";

    echo $form . $button . $formCierre;
?>