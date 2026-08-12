<?php
$nombre  = $_POST["nombre"];
$correo  = $_POST["correo"];
$sabores = $_POST["sabores"];

echo "<h1>Pedido recibido en Heladería Doña Nieve</h1>";
echo "<p><strong>Nombre:</strong> $nombre </p>";
echo "<p><strong>Correo:</strong> $correo </p>";
echo "<p><strong>Sabores:</strong> $sabores </p>";

$productos = ["Cono simple - Bs 8", "Copa doble - Bs 15", "Litro para llevar - Bs 35"];

echo "<h2>Carta de la heladería</h2>";
echo "<ul>";
foreach ($productos as $producto) {
    echo "<li>" . $producto . "</li>";
}
echo "</ul>";
echo "<p>Te atiende Harold Rodrigo Ari Escobar.</p>";
?>