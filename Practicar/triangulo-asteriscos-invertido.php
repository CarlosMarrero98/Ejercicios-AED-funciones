<?php
declare(strict_types=1);
function trianguloInvertido(int $n): void {
    for($i = $n; $i >= 1; $i--) {
        for($j = 0; $j < $i; $j++) {
            echo("*");
        }
        echo "\n";
    }
}

trianguloInvertido(9);
?>