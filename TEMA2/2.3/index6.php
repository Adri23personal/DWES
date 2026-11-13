<!DOCTYPE html>
<html>
<body>

<?php


/*
Escribimos los números del 1 al 10
*/

// 1. Inicializar la variable
//$i=1;

// 2. Creamos un bucle
/*

do {
    // if($i < 5) continue;
    // if($i < 5) break;
    echo $i;
    $i++;
}    while ($i < 11);
*/

/*
for($x = 10; $x >= 0; $x--) {
    if ($x == 5) break;
    if ($x == 7) continue;
    echo $x;
}
*/
/*
$clase = array ("Lunes" => "1",
 "Martes" => "2", 
 "Miércoles" => "3", 
 "Jueves" => "4", 
 "Viernes" => "5");

foreach ($clase as $key => $value) {
    echo "$key : $value <br>"
}
*/


$clase = array ("Lunes",
 "Martes", 
 "Miércoles", 
 "Jueves", 
 "Viernes");
/*
foreach ($clase as $value) {
    echo "$value <br>"
}
*/

foreach ($clase as $z) :
    echo $z;
endforeach;

?>
</body>
</html>