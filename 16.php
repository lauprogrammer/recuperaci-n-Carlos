<?php
function contarPalabras($texto) {
    $texto = strtolower($texto); // Convertir todo el texto a minúsculas
    $palabras = preg_split('/\s+/', $texto, -1, PREG_SPLIT_NO_EMPTY); // Dividir el texto en palabras

    $contador_palabras = [];

    foreach ($palabras as $palabra) {
        $palabra = preg_replace('/[^\p{L}\p{N}\s]/u', '', $palabra); // Eliminar signos de puntuación
        if (array_key_exists($palabra, $contador_palabras)) {
            $contador_palabras[$palabra]++;
        } else {
            $contador_palabras[$palabra] = 1;
        }
    }

    return $contador_palabras;
}

$texto = "Hola, hola mundo. Mundo mundo HOLA.";
$recuento_palabras = contarPalabras($texto);

echo "Recuento final de palabras:" . PHP_EOL;
foreach ($recuento_palabras as $palabra => $cantidad) {
    echo "$palabra: $cantidad veces" . PHP_EOL;
}
?>

