<?php
declare(strict_types=1);
function secuenciaCollatz(int $n): array {
    $secCollatz[] = $n;

    while($n > 1) {
        if ($n % 2 == 0) {
            $n = $n / 2;
        }else {
            $n = $n * 3 + 1;
        }

        $secCollatz[] = $n;
    }

    return $secCollatz;
}

$sec = secuenciaCollatz(1732);
echo implode(" → ", $sec) . "\n";
?>