<?php
function invertirCadena($cadena) {
    $longitud = strlen($cadena);
    $cadena_invertida = '';

    for ($i = $longitud - 1; $i >= 0; $i--) {
        $cadena_invertida .= $cadena[$i];
    }

    return $cadena_invertida;
}

$cadena_original = "Hola mundo";
$cadena_invertida = invertirCadena($cadena_original);

echo "La cadena original es: " . $cadena_original . PHP_EOL;
echo "La cadena invertida es: " . $cadena_invertida . PHP_EOL;
?>
