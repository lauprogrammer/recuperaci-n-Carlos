<?php
$numero_anterior = 0;
$numero_actual = 1;

echo "Los primeros 50 números de la sucesión de Fibonacci son:" . PHP_EOL;

for ($i = 0; $i < 50; $i++) {
    echo $numero_anterior . ", ";

    $suma = $numero_anterior + $numero_actual;
    $numero_anterior = $numero_actual;
    $numero_actual = $suma;
}

?>