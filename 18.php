<?php

function dibujarCuadrado($lado) {
    for ($i = 1; $i <= $lado; $i++) {
        for ($j = 1; $j <= $lado; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

$lado = 5; // Aquí puedes cambiar el tamaño del lado del cuadrado
dibujarCuadrado($lado);

?>