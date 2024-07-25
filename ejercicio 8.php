<?php
// Declaración de la función
function sumar($a, $b) {
    // Suma los dos parámetros y retorna el resultado
    $resultado = $a + $b;
    return $resultado;
}

// Llamada a la función y almacenamiento del resultado en una variable
$suma = sumar(5, 3);

// Mostrar el resultado
echo "La suma de 5 y 3 es: " . $suma;
?>