<?php
// Pedimos al usuario que ingrese un número entero positivo de hasta tres cifras
$numero = readline("Por favor, ingresa un número entero positivo de hasta tres cifras: ");

// Convertimos el valor ingresado a un número entero
$numero = intval($numero);

// Verificamos la cantidad de cifras del número
if ($numero >= 0 && $numero < 10) {
    echo "El número ingresado tiene 1 cifra.\n";
} elseif ($numero >= 10 && $numero < 100) {
    echo "El número ingresado tiene 2 cifras.\n";
} elseif ($numero >= 100 && $numero < 1000) {
    echo "El número ingresado tiene 3 cifras.\n";
} else {
    echo "El número ingresado no es válido (debe ser un entero positivo de hasta tres cifras).\n";
}
?>