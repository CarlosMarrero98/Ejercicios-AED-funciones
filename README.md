# Code, Learn & Practice("Introducción a Php, uso de funciones")

## Número capicúa (palíndromo numérico)

Implementa una función __esCapicua(int $n): bool__ que determine si un número entero positivo es capicúa.

- Un número es capicúa si se lee igual de izquierda a derecha que de derecha a izquierda.

> Ejemplo: `12321` → `true`

```php
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
```

## Escalera de asteriscos

Implementa una función __montañaAsteriscos(int $n, $m): void__ que imprima una escalera de asteriscos de altura `N`y el tamaño M.

- La primera fila contiene 1 asterisco, la segunda 2, y así hasta `N`, `M` veces.

> Ejemplo con entrada `4,2`:

```text
*.     *
**.   **
***  ***
********
```

```php
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
```

## Suma de dígitos

Implementa una función __sumaDigitos(int $n): int__ que calcule la suma de los dígitos de un número entero positivo.

- Descompón el número en dígitos y súmalos.

> Ejemplo: `2025` → `9` (2+0+2+5)

```php
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
```

## Número secreto (múltiplos de 3 o 5)

Implementa una función __multiplosTresOCinco(int $n): array__ que devuelva todos los múltiplos de 3 o 5 menores que `N`.

- Además, calcula la suma de dichos múltiplos.

> Ejemplo con entrada `10`:

```code
3, 5, 6, 9
Suma = 23
```

```php
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
```

## Secuencia de Collatz

Implementa una función __secuenciaCollatz(int $n): array__ que genere la secuencia de Collatz a partir de un entero positivo.

- Si el número es par → dividir entre 2.  
- Si es impar → multiplicar por 3 y sumar 1.  
- Repetir hasta llegar a 1.

> Ejemplo con entrada `6`:

```code
6 → 3 → 10 → 5 → 16 → 8 → 4 → 2 → 1
```

```php
<?php
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
```

---
