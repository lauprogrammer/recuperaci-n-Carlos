<?php
// Pedimos al usuario que ingrese el monto total de la compra
$monto_compra = readline("Ingresa el monto total de la compra: ");

// Verificamos si el monto total de la compra excede los $500,000
if ($monto_compra > 500000) {
    // La empresa puede invertir un 55%, pedir prestado un 30% y solicitar crédito al fabricante por el resto
    $inversion_propia = $monto_compra * 0.55;
    $prestamo_banco = $monto_compra * 0.30;
    $credito_fabricante = $monto_compra - $inversion_propia - $prestamo_banco;
} else {
    // La empresa puede invertir un 70% y solicitar crédito al fabricante por el restante 30%
    $inversion_propia = $monto_compra * 0.70;
    $credito_fabricante = $monto_compra - $inversion_propia;
    $prestamo_banco = 0;
}

// Calculamos los intereses que el fabricante cobrará por el crédito (20%)
$intereses_fabricante = $credito_fabricante * 0.20;

// Mostramos cómo se distribuirá el pago y cuánto pagará en intereses al fabricante
echo "La empresa invertirá: $inversion_propia\n";
echo "Pedirá prestado al banco: $prestamo_banco\n";
echo "Solicitará crédito al fabricante: $credito_fabricante\n";
echo "Intereses a pagar al fabricante: $intereses_fabricante\n";
?>