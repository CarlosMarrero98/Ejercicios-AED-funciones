<?php
declare(strict_types=1);
function piramide(int $n): void {
    for($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n"; 
        /*for($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }

        echo "\n";*/
    }
}

piramide(7);
?>