<?php

function binarioADecimal($binario) {
    $decimal = 0;
    $longitud = strlen($binario);

    for ($i = 0; $i < $longitud; $i++) {
        $bit = $binario[$longitud - $i - 1];
        if ($bit == '1') {
            $decimal += 2 ** $i;
        }
    }

    return $decimal;
}

$numero_binario = "1010"; // Aquí puedes cambiar el número binario a convertir
$numero_decimal = binarioADecimal($numero_binario);
echo "El número binario $numero_binario es igual a decimal: $numero_decimal";

?>
