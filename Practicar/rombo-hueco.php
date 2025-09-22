<?php
declare(strict_types=1);
function romboHueco(int $n): void {
    if ($n <= 0) return;

    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);

        if ($i === 1) {
            echo "*" . "\n";
        } else {
            echo "*" . str_repeat(" ", 2 * $i - 3) . "*" . "\n";
        }
    }

    for ($i = $n - 1; $i >= 1; $i--) {
        echo str_repeat(" ", $n - $i);

        if ($i === 1) {
            echo "*" . "\n";
        } else {
            echo "*" . str_repeat(" ", 2 * $i - 3) . "*" . "\n";
        }
    }
}

romboHueco(3);