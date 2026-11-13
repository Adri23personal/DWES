<?php
// 1. Recogida de datos
$nombre = $_POST['nombre'];
// 2. Validación de datos
//      a) Seguridad: evitamos la inyección de código malicioso
//      b) Precisión: aseguramos que los datos son correctos y completos
//      c) Mejora la experiencia de  nuestros/as usuarios/as: 
//          permite identificar los errores antes de enviar el formulario

// 2.1. Validación básica: Los valores que tiene que introducir están rellenados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    if (empty($nombre)) {
        echo "El campo nombre es obligatorio.";
    }
}

// 2.2. Validación con filtros
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El correo electrónico no es válido.";
}

// 2.3. Evitación de las inyecciones de código -> "Sanitizar" las entradas de información
$usuario = htmlspecialchars($_POST['usuario']);

// 2.4. Validación en la subida de archivos
//      a) Verificar el tipo de archivo enviado
//          Ejemplo: Subida de imágenes
$tiposdearchivospermitidos = ['image/jpeg', 'image/png'];
if(!in_array($archivo['type'], $tiposdearchivospermitidos)) {
    echo "Tipo de archivo no permitido";

}
//      b) Limitar el tamaño permitido de los archivos enviados a través del formulario para evitar problemas

// 3. Procesamiento de datos
echo "Hola $nombre";
?>