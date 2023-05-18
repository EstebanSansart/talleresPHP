<?php
echo '<h1> ¡Gracias por su registro! </h1>';
echo 'Nombre: <br>';
echo isset ($_POST['Nombre']) ? $_POST ['Nombre'] : "";
echo '<br> Email: <br>';
echo isset ($_POST['Email']) ? $_POST ['Email'] : "";
echo '<br> # Celular: <br>';
echo isset ($_POST['Movil']) ? $_POST['Movil'] : "";
?>