<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?PHP 
        //DESARROLLO EJERCICIO N°1
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $B1 = pow($B,2);
        $RAIZ = $B1 - (4 * $A * $C);

        echo "<h1>RESULTADO N°1:</h1>";
        if($RAIZ < 0)
        {            
            echo "<p>No se puede realizar la raíz negativa.</p>";
        }
        else
        {
            $RAIZ1 = sqrt($RAIZ);
            $X1 = ((-$B) + $RAIZ1) / (2*$A);
            print "<p>El resultado interno de la raiz es: $X1</p>";
        }

        //DESARROLLO EJERCICIO N°2
        $P = $_POST['P'];
        $r = $_POST['r'];
        $n = $_POST['n'];
        $t = $_POST['t'];

        $resultado = $P/$r * (1+$P)^($n*$t);

        echo "<h1>RESULTADO N°2:</h1>";
        if($resultado % 2 == 0)
        {   
            $nombreArchivo = "par".".txt";
            $control = fopen($nombreArchivo, "w+") or die ("No se puede abrir.");
            $escribir = "Resultado: $resultado";
            fputs($control,$escribir);
            fclose($control);
            echo "<p>El resultado es: PAR</p>";
        }
        else
        {
            $nombreArchivo = "impar".".txt";
            $control = fopen($nombreArchivo, "w+") or die ("No se puede abrir.");
            $escribir = "Resultado: $resultado";
            fputs($control,$escribir);
            fclose($control);
            echo "<p>El resultado es: IMPAR</p>";
        }

        //DESARROLLO EJERCICIO N°3
        echo "<h1>RESULTADO N°3:</h1>";

        $ip=$_SERVER['REMOTE_ADDR'];
        $fecha= date('j F Y');
        $hora = date('H:i');
        $telefono = $_POST["telefono"];
        $ingreso = "IP: ($ip) - $fecha - $hora - $telefono"."\n";
        $archivoDatos = "datos".".txt";
        if(file_exists("$archivoDatos") == true)
        {
            $abrir = fopen($archivoDatos, "a+") or die ("El archivo no se puede leer.");
            fputs($abrir, $ingreso);
            fclose($abrir);
            print $ingreso;
        }
        else 
        {
            $abrir = fopen($archivoDatos, "w+") or die ("El archivo no se puede leer.");
            fputs($abrir, $ingreso);
            fclose($abrir);
            print $ingreso;
        }
    ?>

</body>
</html>