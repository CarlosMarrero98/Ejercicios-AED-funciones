<?php
declare(strict_types=1);

/**
 * Imprime un tablero de ajedrez de tamaño n x n
 * usando asteriscos y espacios.
 *
 * - La primera casilla (fila 1, columna 1) es un asterisco (*).
 * - El patrón se alterna en filas y columnas.
 *
 * @param int $n Tamaño del tablero (número de filas y columnas)
 * @return void
 */
function tableroAjedrez(int $n): void {
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n; $j++) {
            if(($i + $j) % 2 == 0) {
                echo "*";
            }else{
                echo " ";
            }
        }
        echo "\n";
    }
}

tableroAjedrez(6);
?>


  *|*  |*
 **|** |**
***|***|***