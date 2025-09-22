<?php
declare(strict_types=1);
/**
 * Genera todos los números primos menores o iguales a $n
 * utilizando la Criba de Eratóstenes.
 *
 * @param int $n Límite superior (>= 2)
 * @return int[] Lista de números primos hasta $n
 */
function cribaEratostenes(int $n): array {
    $isPrime = array_fill(0, $n + 1, true);
    $isPrime[0] = false;
    $isPrime[1] = false;

    for($i = 2; $i * $i <= $n; $i++) {
        if($isPrime[$i]) {
            for($j = $i * $i; $j <= $n; $j+=$i) {
                $isPrime[$j] = false;
            }
        }
    }

    $primos = [];

    for($i = 2; $i <= $n; $i++) {
        if($isPrime[$i]) {
            $primos[] = $i;
        }
    }

    return $primos;
}

/**
 * Calcula estadísticas sobre los números primos menores o iguales a $n.
 *
 * Estadísticas devueltas:
 * - "primos": lista de primos hasta $n
 * - "cantidad": número total de primos encontrados
 * - "gapMax": mayor diferencia entre dos primos consecutivos
 * - "gapPair": array con los dos primos que forman ese gap máximo
 *
 * @param int $n Límite superior (>= 2)
 * @return array{
 *     primos: int[],
 *     cantidad: int,
 *     gapMax: int,
 *     gapPair: array{int|null, int|null}
 * }
 */
function primosYEstadisticas(int $n): array {
    
    $primos = cribaEratostenes($n);
    $cantidad = count($primos);

    $ini = null;
    $fin = null;
    $gapMax = 0;
    
    for($i = 1; $i < $cantidad; $i++) {
        $gap = $primos[$i] - $primos[$i - 1];

        if($gap > $gapMax) {
            $gapMax = $gap;
            $ini = $primos[$i - 1];
            $fin = $primos[$i];
        }
    }

    $estadistica = [
        "primos" => $primos,
        "cantidad" => $cantidad,
        "gapMax" => $gapMax,
        "gapPair" => [$ini, $fin],
    ];

    return $estadistica;
}

$result = primosYEstadisticas(50);

echo "Los primos son " . implode(" ", $result["primos"]) . "\n";
echo "Hay " . $result["cantidad"] . " numeros primos\n";
echo "Gap máximo: " . $result["gapMax"] . " entre " . $result["gapPair"][0] . " y " . $result["gapPair"][1] . "\n";
?>