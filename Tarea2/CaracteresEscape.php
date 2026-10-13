<DOCTYPE html>
<html>
<head>
    <title>Caracteres de escape</title>
</head>
<body>
<?php
    $espacio = "<br>";
    $x1 = 'Estamos en el \' Doctor Fleming\' desde las 8:30 h';
    echo $x1;
    echo $espacio;

    $x2 = "Estamos en el \"Doctor Fleming\" desde las 8:30 h";
    echo $x2;
    echo $espacio;

    $x3 = "Hola \t mundo";
    echo $x3;
    echo $espacio;

    $x4 = "\110\145";
    echo $x4;
    echo $espacio;

    $y = "\x48";
    echo $y;
    echo $espacio;

    
    $x5 = acos(8);
    var_dump($x5);
    var_dump(is_nan($x5));
    echo $x5;
    echo $espacio;
    

    // Entero
    $a = 5;
    // Float
    $b = 5.34;
    // Cadena
    $c = "Hola";
    // Boolean
    $d = true;
    // NULL
    $e = NULL;

    var_dump($a);

    $a = (string) $a;
    var_dump($a);

    var_dump($b);

    $b = (string) $b;
    var_dump($b);

    var_dump($c);

    $c = (string) $c;
    var_dump($c);

    var_dump($d);

    $d = (string) $d;
    var_dump($d);

    var_dump($e);

    $e = (string) $e;
    var_dump($e);

    echo $espacio;
    echo $espacio;
    echo $espacio;


    $x = 5;
    echo ++$x;
    echo $espacio;


    $y2 = 5;
    echo $y2++;
    echo $espacio;
    echo $y2;
    echo $espacio;

    echo ($x <=> $y2);

    

?>
</body>
<html>