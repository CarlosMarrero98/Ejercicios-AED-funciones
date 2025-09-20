<?php
declare(strict_types=1);
function montañaAsteriscos(int $n, int $m): void {
    for ($i = 1; $i <= $n; $i++) {
        $linea = "";
        for ($j = 1; $j <= $m; $j++) {
            $linea .= str_repeat("*", $i);
            if ($j < $m) {
                $linea .= str_repeat(" ", $n - $i);
            }
        }
        echo $linea . "\n";
    }
}

montañaAsteriscos(4, 2);
?>