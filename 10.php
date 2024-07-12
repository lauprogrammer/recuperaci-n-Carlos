<?php
// Pedimos al usuario que ingrese su sexo (M para masculino, F para femenino) y su edad
$sexo = readline("Ingresa tu sexo (M para masculino, F para femenino): ");
$edad = intval(readline("Ingresa tu edad: "));

// Calculamos el número de pulsaciones según el sexo y la edad
if ($sexo === 'F' || $sexo === 'f') {
    $num_pulsaciones = (220 - $edad) / 10;
} elseif ($sexo === 'M' || $sexo === 'm') {
    $num_pulsaciones = (210 - $edad) / 10;
} else {
    echo "Sexo no válido. Por favor, ingresa M para masculino o F para femenino.";
    exit();
}

// Mostramos al usuario el número de pulsaciones por cada 10 segundos de ejercicio aeróbico
echo "El número de pulsaciones por cada 10 segundos de ejercicio aeróbico es: $num_pulsaciones\n";
?>
