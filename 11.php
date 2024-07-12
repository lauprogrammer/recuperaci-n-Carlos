<?php
// Pedimos al usuario que ingrese el monto de la hipoteca
$monto_hipoteca = readline("Ingresa el monto de la hipoteca: $");

// Calculamos cómo se distribuirá la inversión total
if ($monto_hipoteca < 1000000) {
    $inversion_usuario = $monto_hipoteca * 0.5;
    $inversion_socio = $monto_hipoteca * 0.5;
} else {
    $inversion_usuario = $monto_hipoteca;
    $dinero_restante = // Calcular el dinero restante necesario para cubrir la inversión total
    $inversion_usuario += $dinero_restante / 2;
    $inversion_socio = $dinero_restante / 2;
}

// Calculamos cuánto dinero le prestará el banco
$monto_prestamo_banco = (""); // Calcular el monto del préstamo del banco

// Mostramos al usuario cuánto dinero le prestará el banco y cómo se distribuirá la inversión
echo "El banco prestará: $" . $monto_prestamo_banco . "\n";
echo "Inversión del usuario: $" . $inversion_usuario . "\n";
echo "Inversión del socio: $" . $inversion_socio . "\n";
?>
