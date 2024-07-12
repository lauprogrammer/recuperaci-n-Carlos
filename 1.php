<?php
// Definir la constante Pi
Define('PI', 3.1416);

// Función para calcular el perímetro de una circunferencia
function calcularPerimetro($radio) {
    return 2 * PI * $radio;
}

// Función para calcular el área de un círculo
function calcularArea($radio) {
    return PI * ($radio * $radio); // Radio al cuadrado
}

// Función para calcular el volumen de una esfera
function calcularVolumen($radio) {
    return (4 / 3) * PI * ($radio * $radio * $radio); // Radio al cubo
}

// Pedir al usuario que introduzca el radio
$radio = readline("Introduce el radio: ");

// Calcular y mostrar el perímetro
$perimetro = calcularPerimetro($radio);
echo "El perímetro de la circunferencia es: " . $perimetro . "\n";

// Calcular y mostrar el área
$area = calcularArea($radio);
echo "El área del círculo es: " . $area . "\n";

// Calcular y mostrar el volumen
$volumen = calcularVolumen($radio);
echo "El volumen de la esfera es: " . $volumen . "\n";
?>