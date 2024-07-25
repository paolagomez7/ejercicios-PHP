<?php
// Verificar si el formulario fue enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos del formulario para prevenir ataques XSS
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);

    // Mostrar los datos recibidos
    echo "<h2>Datos Recibidos:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo Electrónico: " . $correo . "<br>";
} else {
    // Mostrar un mensaje de error si el método de solicitud no es POST
    echo "Método de solicitud no válido.";
}
?>