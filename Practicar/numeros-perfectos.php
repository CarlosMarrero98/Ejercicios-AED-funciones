<?php
declare(strict_types=1);
function esPerfecto(int $n): bool {
    if($n < 1) {
        return false;
    }

    $sum = 0;

    for($i = 1; $i < $n; $i++) {
        if($n % $i == 0) {
            $sum += $i;
        }
    }

    return $n == $sum;
}

echo (esPerfecto(1) ? "Perfecto" : "No perfecto") . "\n";

?>