<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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

        <table>
            <tr> <!-- Table Row -->
                <td> <!-- Table Data Cell -->
                    <h1>
                        Datos de:
                        <?php echo "$nombre $apellido"; ?>
                    </h1>
                </td>
            </tr>
            <tr> <!-- Table Row -->
              <td width=50%><b>RUT</b></td> <!-- Table Data Cell -->
              <td width=50%><b>Correo</b></td> <!-- Table Data Cell -->
            </tr>
            <tr> <!-- Table Row -->
              <td width=50%><?php echo "$rut"; ?> </td> <!-- Table Data Cell -->
              <td width=50%><?php echo "$correo"; ?> </td> <!-- Table Data Cell -->
            </tr>
            <tr> <!-- Table Row -->
              <td width=50%><b>Nombre</b></td> <!-- Table Data Cell -->
              <td width=50%><b>Apellido</b></td> <!-- Table Data Cell -->
            </tr>
            <tr> <!-- Table Row -->
              <td width=50%><?php echo "$nombre"; ?> </td> <!-- Table Data Cell -->
              <td width=50%><?php echo "$apellido"; ?> </td> <!-- Table Data Cell -->
            </tr>
        </table>
  </body>
</html>