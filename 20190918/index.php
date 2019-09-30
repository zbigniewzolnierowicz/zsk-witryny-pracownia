<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operacje na zmiennych</title>
</head>
<body>
    <?php
        // * Potęgowanie
        $potega = 2**10;
        echo "\$potega = $potega<br/>";
        // * Operatory bitowe
        // * OR: |
        // * AND: &
        // * NOT: ~
        // * XOR: ^
        // * Przesunięcie w lewo: >>
        // * Przesunięcie w prawo: <<
        $x = 0b1010;
        echo "\$x = $x<br/>";
        $x >>= 1; // * Przesunięcie w lewo o 1: 0b101 - 5
        echo "\$x = $x<br/>";
        $x <<= 2; // * Przesunięcie w prawo o 2: 0b10100 - 20
        echo "\$x = $x<br/>";
        echo "<hr>";
        // * Porównywanie
        $x = 1;
        $y = 2;
        $wynik = $x <=> $y;
        echo $wynik; // * Jeśli liczba po prawej będzie mniejsza: -1. Jeśli ta po lewej: 1. Jeśli są równe: 0;
    ?>
</body>
</html>