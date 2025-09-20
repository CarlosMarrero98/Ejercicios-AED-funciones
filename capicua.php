<?php
declare(strict_types=1);
function capicua(int $number): string {
    $strNumber = (string) $number;
    $invNumber = strrev($strNumber);

    if($strNumber == $invNumber) {
        return "True";
    }

    return "False";
}

echo capicua(1889881) . "\n";
?>