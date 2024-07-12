<?php
// Solicitar al usuario que ingrese el capital actual
echo "Ingresa tu capital actual: ";
$capital_actual = intval(readline());

// Calcular el nuevo saldo deseado y las cantidades para insumos e incentivos
$nuevo_saldo_deseado = ($capital_actual < 0) ? 10000 : (($capital_actual > 0 && $capital_actual < 20000) ? 20000 : $capital_actual);
$cantidad_insumos = 5000;
$cantidad_incentivos = ($nuevo_saldo_deseado - $cantidad_insumos - 2000) / 2;

// Calcular la cantidad a pedir al banco si es necesario
$cantidad_prestamo = ($nuevo_saldo_deseado > $capital_actual) ? $nuevo_saldo_deseado - $capital_actual : 0;

// Mostrar resultados
echo "Cantidad para insumos: " . $cantidad_insumos . "\n";
echo "Cantidad para incentivos al personal: " . $cantidad_incentivos . "\n";
echo "Cantidad a pedir al banco: " . $cantidad_prestamo . "\n";
?>

