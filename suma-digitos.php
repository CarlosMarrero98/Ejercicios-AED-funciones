<?php
declare(strict_types=1);
function sumaDigitos(int $n): int {
    $num = $n;
    $sum = 0;
    
    while($num > 0) {
        $sum += ($num % 10);
        $num = intdiv($num, 10);
    }

    return $sum;
}

echo sumaDigitos(1) . "\n";
?>