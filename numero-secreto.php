<?php
declare(strict_types=1);
function multiplosTresOCinco(int $n): array {
    $vector = [];

    for($i = 1; $i < $n; $i++) {
        if($i % 3 == 0 || $i % 5 == 0) {
            $vector[] = $i;
        }
    }

    return $vector;
} 

$nums = multiplosTresOCinco(10);
echo implode(", ", $nums) . "\n";
echo "Suma = " . array_sum($nums) . "\n";

?>