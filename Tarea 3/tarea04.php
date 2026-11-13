<DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>
<?php
    echo "---------CALCULADORA---------" . "<br>" . "<br>";
    $a = 52;
    $b = 4;
    echo "Suma: " . "$a + $b = " . ($a + $b) . "<br>";
    echo "Resta: " . "$a - $b = " . ($a - $b) . "<br>";
    echo "Multiplicación: " . "$a * $b = " . ($a * $b) . "<br>";
    echo "División: " . "$a / $b = " . ($a / $b) . "<br>" . "<br>"; 

    echo "Resto: " . "$a % $b = " . ($a % $b) . "<br>"; 
    echo "Potencia: " ."$a ** $b = " . ($a ** $b) . "<br>";
    echo "Negación: " ."-$a . -$b = " . (-$a) . (-$b) . "<br>";
    echo "Distinto: " ."$a != $b = " . ($a != $b) . "<br>" . "<br>";

    // Comparación
    echo "Igual: " . "$a == $b = " . ($a == $b) . "<br>";
    echo "Idéntico: " . "$a === $b = " . ($a === $b) . "<br>";
    echo "No idéntico: " . "$a !== $b = " . ($a !== $b) . "<br>";
    echo "Menor que: " . "$b < $a = " . ($b < $a) . "<br>";
    echo "Mayor que: " . "$b > $a = " . ($b > $a) . "<br>" . "<br>";

    // Asignación
    echo "Asignación suma: " . "$a += $b = " . ($a += $b) . "<br>";
    echo "Asignación resta: " . "$a -= $b = " . ($a -= $b) . "<br>";
    echo "Asignación multiplicación: " . "$a *= $b = " . ($a *= $b) . "<br>";
    echo "Asignación división: " . "$a /= $b = " . ($a /= $b) . "<br>";
    echo "Asignación resto: " . "$a %= $b = " . ($a %= $b) . "<br>" . "<br>";

    echo "Pre-Incremento: " . "++$a = " . (++$a) . "<br>";
    echo "Post-Incremento: " . "$a++ = " . ($a++) . "<br>";
    echo "Pre-Decremento: " . "--$b = " . (--$b) . "<br>";
    echo "Post-Decremento: " . "$b-- = " . ($b--) . "<br>" . "<br>";

    // Lógicos
    echo "AND (y): " . "$a && $b = " . ($a && $b) . "<br>"; 
    echo "OR (o): " ."$a || $b = " . ($a || $b) . "<br>";
    echo "XOR: " ."$a xor $b = " . (($a xor $b) ? "true" : "false") . "<br>";
    echo "NOT (no): " ."!$a = " . ((!$a) ? "true" : "false") . "<br>";

?>
</body>
<html>