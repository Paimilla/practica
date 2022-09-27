<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP 
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Rut = $_POST['Rut'];
    $Correo = $_POST['Correo'];
    $Nacimiento = $_POST['F_Nacimiento'];
    $nombreCarpeta = $Nombre . $Apellido . $Rut;
    if( file_exists("$nombreCarpeta") == true)
        echo "<p>El directorio existe </p>";
    else 
        mkdir("$nombreCarpeta");
    
    
    ?>

</body>
</html>