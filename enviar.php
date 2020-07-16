<?php

$destino="rocio@rypcontadoresyasociados.com";
$destino2="karen@rypcontadoresyasociados.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];
$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
mail($destino2, "Contacto", $contenido);
header("location:index.html");

?>