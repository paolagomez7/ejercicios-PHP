<?php
// Detalles de la conexión
$servidor ="localhost";
$usuario = "root"; // Reemplaza 'tu_usuario' por tu usuario de MySQL
$password = "root"; // Reemplaza 'tu_contraseña' por tu contraseña de MySQL
 // Crear una nueva conexión utilizando mysqli
$conexion = new mysqli($servidor, $usuario, $password);
if($conexion-> connect_errno){
    // Mostrar un mensaje de error en caso de fallo
    die("conexion fallada" . $conexion->connect_errno);
}
// Mostrar un mensaje de éxito
echo "conexion exitosa...";
?>