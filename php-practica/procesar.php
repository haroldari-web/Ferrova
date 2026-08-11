<?php
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$telefono = $_POST["telefono"];
$asunto   = $_POST["asunto"];
$mensaje  = $_POST["mensaje"];

echo "<h1>Datos recibidos</h1>";
echo "<p><strong>Nombre completo:</strong> $nombre </p>";
echo "<p><strong>Correo electrónico:</strong> $correo </p>";
echo "<p><strong>Teléfono:</strong> $telefono </p>";
echo "<p><strong>Asunto:</strong> $asunto </p>";
echo "<p><strong>Mensaje:</strong> $mensaje </p>";
?>