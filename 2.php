<?php
// Función para leer un número desde el teclado
function leerNumero($mensaje) {
    echo $mensaje;
    return readline();
}

// Leer dos números desde el teclado
$num1 = leerNumero("Introduce el primer número: ");
$num2 = leerNumero("Introduce el segundo número: ");

// Asegurarse de que los valores leídos sean tratados como números
$num1 = $num1 + 0;
$num2 = $num2 + 0;

// Comparar los números y realizar las operaciones correspondientes
if ($num1 > $num2) {
    $suma = $num1 + $num2;
    $diferencia = $num1 - $num2;
    echo "El primer número es mayor que el segundo.\n";
    echo "Suma: " . $suma . "\n";
    echo "Diferencia: " . $diferencia . "\n";
} else {
    $producto = $num1 * $num2;
    if ($num2 != 0) { // Verificar que el segundo número no sea cero para evitar división por cero
        $division = $num1 / $num2;
        echo "El primer número no es mayor que el segundo.\n";
        echo "Producto: " . $producto . "\n";
        echo "División: " . $division . "\n";
    } else {
        echo "El segundo número es cero, no se puede realizar la división.\n";
        echo "Producto: " . $producto . "\n";
    }
}
?>