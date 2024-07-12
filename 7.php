<?php
// Pedimos al usuario que ingrese la cantidad en metros
$cantidad_metros = readline("Ingresa la cantidad en metros: ");

// Convertimos la cantidad ingresada a número flotante
$cantidad_metros = floatval($cantidad_metros);

// Solicitamos al usuario que elija a qué unidad desea convertir la cantidad
echo "Elige a qué unidad deseas convertir la cantidad ingresada:\n";
echo "1) Centímetros\n";
echo "2) Kilómetros\n";
echo "3) Pulgadas\n";
$opcion = readline("Ingresa el número de la unidad deseada: ");

// Realizamos la conversión según la elección del usuario
switch ($opcion) {
    case 1:
        $cantidad_convertida = $cantidad_metros * 100; // Convertir a centímetros
        $unidad = "centímetros";
        break;
    case 2:
        $cantidad_convertida = $cantidad_metros / 1000; // Convertir a kilómetros
        $unidad = "kilómetros";
        break;
    case 3:
        $cantidad_convertida = $cantidad_metros * 39.37; // Convertir a pulgadas
        $unidad = "pulgadas";
        break;
    default:
        echo "Opción inválida. Por favor selecciona una opción válida.";
        exit;
}

// Mostramos el resultado de la conversión
echo "La cantidad de $cantidad_metros metros equivale a $cantidad_convertida $unidad.\n";
?>
