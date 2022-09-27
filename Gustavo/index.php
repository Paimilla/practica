<?php

$fecha= date('d-m-Y');
$hora = date('H:i:s');
$hora = str_replace(":", "-", $hora);

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$correo = $_POST['correo'];

$nombreCarpeta = $nombre . "_" . $apellido; // El nombre de la carpeta tendra el siguiente formato: Nombre_Apellido.
$nombreArchivo = $nombre . "_" . $apellido . "_" . $fecha . "_" . $hora; // El nombre de archivo tendra el siguiente formato: Nombre_Apellido_Fecha_Hora.
$ruta = "$nombreCarpeta/$nombreArchivo.txt"; // Ruta donde se creará el archivo y su extensión.

$mensaje = "Hola $nombre!\nTu nombre es: $nombre\nTu apellido es: $apellido\nTu RUT es: $rut\nTu correo es: $correo";

if (file_exists("$nombreCarpeta") == true) {
    /* Si el archivo (carpeta) exsite, entregamos
        un mensaje especificando que la ruta ya existe.
    */
    echo "<p>El directorio YA existe!</p><br>$ruta";
} else {
    /* Caso contrario, la carpeta será creada con el nombre
        definido en la variable $nombreCarpeta
    */

    echo "<h4>$nombre!</h4><br><p>Tu directorio personal ha sido creado.</p>";

    mkdir("$nombreCarpeta");

    // Escritura dentro del archivo.
    $archivo = fopen($ruta, "w+") or die ("El archivo no se puede leer.");
    fputs($archivo, $mensaje);
    fclose($archivo);
}

?>