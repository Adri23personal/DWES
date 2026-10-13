<DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    // 1. cadena
    $a = 'Hola';
    var_dump($a);

    // 2. Entero
    $b = 8;
    var_dump($b);

    // 3. Flotante
    $c = 9.75;
    var_dump($c);

    // 4. Boleano
    $d = true;
    var_dump($d);

    // 5. Array
    $e = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    var_dump($e);

    // 6. Objeto
    class Car {
        // Atributos
        public $matricula;
        public $marca;
        public $modelo;
        public $tipo;


        public function construct ($matriducla, $marca, $modelo, $tipo) {
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->tipo = $tipo;

        }

/*
7. Caracteres de Escape
' //Imprime comilla simple
" //Imprime comilla doble
$ //Imprime el símbolo del dolar
\t //Para tabular
\f // Para formularios


8. Casting
(string),(int),(bool),(float),(array),(object)


9. Asignacion
$a = $b;
$a+=$b;
$a-=$b;
$a=$b;
$a/=$b;
$a%=$b;


10. Operadores de comparación
$a == $b; // equal
$a === $b; //Identical
$a!= $b
$a<>$b
$a!==$b
$a>$b
$a<$b
$a>=$b
$a<=$b


11. Operadores de incremento/decremento
$x = 5;
echo ++$x; // Se incrementa el resultado en 1 al principio y luego se imprime
echo"<br>";
$y= 5;
echo $x++; // Se imprime el resultao del inicio y luego se incrementa en 1
echo "<br>";

12. Operadores lógicos
$a && $b;
$a OR $b;
$a || $b;
$a XOR $b;
$a NOR $b;

13. Operadores de concatenacion
Asignacion .=
$a .= $b;

*/
        
        // Métodos
        public function message() {
            return "Mi coche es: " . $this->matricula . " " . $this->marca . " "
        }
    }
?>
</body>
</html>