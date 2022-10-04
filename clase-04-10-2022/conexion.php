<?php
    $servername = "127.0.0.1";
    $nombre_usuario = "root";
    $password = "";
    $nombre_bd = "db_ejemplo1";

    // Crear la conexión
    $conn = mysqli_connect($servername, $nombre_usuario, $password, $nombre_bd);

    //Chequear conexión
    if(!$conn)
    {
        die("Error en la conexion: " . mysqli_connect_error());
    }
    
    echo "Conexión establecida";
?>