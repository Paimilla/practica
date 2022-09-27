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
        $nombreArchivo = "$nombreCarpeta/$nombreCarpeta".".html";
        $control = fopen($nombreArchivo, "w+") or die("no se puede abrir");
        $escribir = "$Nombre $Apellido $Rut $Correo $Nacimiento";
        fputs($control, $escribir);
        fclose($control);
    
    echo "$Nombre $Apellido $Rut $Correo $Nacimiento";
    ?>
    <table>
        <tr>
            <td>
                <h1>
                    Datos de : 
                    <?PHP echo " $Nombre $Apellido"; ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>

</body>
</html>