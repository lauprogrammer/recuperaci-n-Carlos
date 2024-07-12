<?php

// Solicitar al usuario que ingrese el sueldo y la antigüedad
$sueldo = readline("Ingresa el sueldo del operario: ");
$antiguedad = readline("Ingresa los años de antigüedad del operario: ");

if ($sueldo < 500) {
    if ($antiguedad >= 10) {
        $sueldo += $sueldo * 0.20; // Aumento del 20%
    } else {
        $sueldo += $sueldo * 0.05; // Aumento del 5%
    }
}

echo "Sueldo a pagar: $sueldo";

?>
