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
                echo "<p>El directorio existe</p>";
            else 
                mkdir("$nombreCarpeta");
            $nombreArchivo = "$nombreCarpeta/$nombreCarpeta".".html";
            $control = fopen($nombreArchivo, "w+") or die ("No se puede abrir");
            $escribir = "$Nombre $Apellido $Rut $Correo $Nacimiento";
            fputs($control,$escribir);
            fclose($control);
            echo "$Nombre $Apellido $Rut $Correo $Nacimiento";
        ?>

    <table>
        <tr>
            <td>
                <h1>
                    Datos de: 
                    <?PHP 
                        echo " $Nombre $Apellido"; 
                    ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td width=50%> <b>RUT</b></td>
            <td width=30%> <b>Fecha de Nacimiento</b></td>
            <td width=30%> <b>Correo</b></td>

        </tr>
        <tr>
            <td width=30%> 
                <?php
                    echo "$Rut";
                ?>
            </td>
            <td width=30%>
                <?php
                    echo "$Nacimiento";
                ?>
            </td>
            <td width=30%>
                <?php
                    echo "$Correo";
                ?>
            </td>
        </tr>
    </table>
  </body>
</html>