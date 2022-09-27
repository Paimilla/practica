<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
        <?PHP 
            $Nombre = $_POST['Nombre'];
            $Apellido = $_POST['Apellido'];
            $Rut = $_POST['Rut'];
            $Correo = $_POST['Correo'];
            $Nacimiento = $_POST['F_Nacimiento'];
            $nuevoNombre = 
            $nombreCarpeta = $Nombre . $Apellido . $Rut;
            if( file_exists("$nombreCarpeta") == true)
                echo "<p>El directorio existe </p>";
            else 
                mkdir("$nombreCarpeta");
            $nombreArchivo = "$nombreCarpeta".".html";
            $control = fopen($nombreArchivo, "w+") or die ("No se puede abrir");
            
        ?>
  </body>
</html>