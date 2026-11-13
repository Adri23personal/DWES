<!DOCTYPE html>
<html>
<body>
<pre>
<?php

// Ejercicio 16
// $finde = array("Sábado", "Domingo");
// var_dump($finde);
// Ejercicio 17
// $mix = array ("Cadena", 7, ["12", "doce"]);
// var_dump($mix);
// Ejercicio 18
/*
$finde = array("Sábado", "Domingo");
var_dump($finde);
echo count($finde);
echo $finde[0];
*/

// Ejercicio 19
/*
$finde = array("Sábado", "Domingo");
var_dump($finde);
echo count($finde);
foreach ($finde as $dia) (
    echo "$dia <br>";
)
*/

// Ejercicio 20
/*
$finde = array("6" => "Sábado", "7" => "Domingo");
var_dump($finde);
echo $finde["6"];
$finde["7"] =  "DOMINGO";
var_dump($finde);
foreach ($finde as $dia) {
    echo "$dia <br>";
}
*/

// Ejercicio 21
/*
$finde = ["Sábado", "Domingo"];

$finde = [
    "Sábado",
    "Domingo",
];
*/
/*
$finde = ["Sábado", "Domingo"];

$finde = [
    0 => "Sábado",
    1 => "Domingo"
];

$finde = [
    0 => "Sábado",
    1 => "Domingo",
];
*/

/*
$finde = [];
$finde[0] = "Sábado";
$finde[1] = "Domingo";
*/

/*
$finde = [];
$finde["S"] = "Sábado";
$finde["D"] = "Domingo";
*/

$mix = [];
$mix[0] = "Cadena";
$mix[1] = 1;
$mix[2] = 1.5;
$mix["tres"] = 3;

// Ejercicio 22
/*
function miFuncion() {
    echo "¡Fiesta!";
}

$finde = array("Sábado", "Domingo", "miFuncion");
$finde[2]();
*/

// Ejercicio 23
/*
$colores = array("Negro", "Rojo", "Azul");
$colores[] = "Morado";
$colores[] = "Verde";
var_dump($colores);
*/

// Ejercicio 24
/*
$colores = array("marca" => "Toyota", "modelo" => "Corolla");
$coches["color"] = "Negro mate";
var_dump($coches);
*/

// Ejercicio 25
/*
$frutas = array("Plátano", "Manzana", "Pera");
array_push($frutas, "Naranja", "Mandarina", "Limón", "Lima");
var_dump($frutas);
*/

// Ejercicio 26
/*
$colores = array("marca" => "Toyota", "modelo" => "Corolla");
$coches["color"] = "Negro mate";
$coches += ["año" => 2026];
var_dump($coches);
*/

// Ejercicio 27
/*
$frutas = array("Plátano", "Manzana", "Pera");
array_push($frutas, "Naranja", "Mandarina", "Limón", "Lima");
array_unshift($FRUTAS, "Kiwi", "Fresas");
$comidaNoSaludable = array ("Pizza", "Hamburguesa", "Chocolate");
$comida = array_merge($frutas, $comidaNoSaludable);
var_dump($comida);

array_splice($comida, 9, 11);
var_dump($comida);
array_pop($comida); // Eliminamos el último elemento
var_dump($comida);
array_shift($comida); // Eliminamos el primer elemento
var_dump($comida);
*/

// Ada Lovelace
function codeWeek () {
    echo "Ada Lovelace";
    echo "Quien era (con imagen) <br>";
    echo "Con quien trabajaba <br>";
    echo "En que trabajaban (con ina imagen)";
    echo "Que inventó y poque su invento es tan importante para nosostros (otra imagen)";

}

codeWeek();
?>
</pre>
</body>
</html>