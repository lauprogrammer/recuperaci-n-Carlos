<?php
// Solicitamos al usuario que ingrese la cantidad de inversión y la tasa de interés
$inversion = readline("Ingresa la cantidad de inversión: ");
$tasa_interes = readline("Ingresa la tasa de interés anual (en decimal): ");

// Convertimos la tasa de interés a un número decimal si es necesario
if ($tasa_interes > 1) {
    $tasa_interes /= 100; // Convertimos el valor a decimal si es mayor que 1
}

// Calculamos los intereses
$intereses = $inversion * $tasa_interes;

// Verificamos si los intereses exceden los $7000
if ($intereses > 7000) {
    $inversion += $intereses; // Se reinvierten los intereses
}

echo "La cantidad de intereses generada es: $" . $intereses . "\n";
echo "La cantidad final en la cuenta es: $" . $inversion;
?>

