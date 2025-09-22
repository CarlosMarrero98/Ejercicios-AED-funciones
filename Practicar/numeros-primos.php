<?php
declare(strict_types=1);
function esPrimo(int $n): bool {
    if($n <= 1) {
        return false;
    }

    if($n <= 3) {
        return true;
    }

    if($n % 2 == 0) {
        return false;
    }

    for($i = 3; $i < $n; $i++) {
        if($n % $i == 0) {
            return false;
        }
    }

    return true;
}

echo esPrimo(3) ? "Es primo" . "\n": "No es primo" . "\n";
?>