<?php
// Pedimos al usuario que ingrese las coordenadas x e y del punto
$x = readline("Ingresa la coordenada x del punto: ");
$y = readline("Ingresa la coordenada y del punto: ");

// Convertimos los valores ingresados a números enteros
$x = intval($x);
$y = intval($y);

// Determinamos en qué cuadrante se ubica el punto
if ($x > 0 && $y > 0) {
    $cuadrante = "1er Cuadrante";
} elseif ($x < 0 && $y > 0) {
    $cuadrante = "2do Cuadrante";
} elseif ($x < 0 && $y < 0) {
    $cuadrante = "3er Cuadrante";
} elseif ($x > 0 && $y < 0) {
    $cuadrante = "4to Cuadrante";
} elseif ($x == 0 && $y == 0) {
    $cuadrante = "Origen";
} elseif ($x == 0) {
    $cuadrante = "Eje Y";
} elseif ($y == 0) {
    $cuadrante = "Eje X";
}

// Mostramos en pantalla en qué cuadrante se encuentra el punto
echo "El punto de coordenadas ($x, $y) se encuentra en el $cuadrante.\n";
?>