<?php
// Pedimos al usuario que ingrese los datos del postulante
$nombre = readline("Ingresa el nombre del postulante: ");
$totalPreguntas = readline("Ingresa la cantidad total de preguntas realizadas: ");
$correctas = readline("Ingresa la cantidad de preguntas contestadas correctamente: ");

// Convertimos los valores ingresados a números enteros
$totalPreguntas = intval($totalPreguntas);
$correctas = intval($correctas);

// Calculamos el porcentaje de respuestas correctas
$porcentajeCorrectas = ($correctas / $totalPreguntas) * 100;

// Determinamos el nivel del postulante
if ($porcentajeCorrectas >= 90) {
    $nivel = "Nivel superior";
} elseif ($porcentajeCorrectas >= 75) {
    $nivel = "Nivel medio";
} elseif ($porcentajeCorrectas >= 50) {
    $nivel = "Nivel regular";
} else {
    $nivel = "Fuera de nivel";
}

// Mostramos el resultado
echo "El postulante $nombre ha obtenido un porcentaje de respuestas correctas del $porcentajeCorrectas%.\n";
echo "Nivel: $nivel\n";
?>