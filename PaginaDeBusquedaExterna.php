
<html>
<head>
<title>Prueba de base de datos</title>

<style>
    table{
        width: 50%;
        border: 1px dotted darkmagenta;
        margin: auto;
    }
</style>

</head>

    <body>

        <?php
        $busqueda=$_GET["buscar"];

        $host = "localhost";
        $user ="root";
        $password='';
        $database ='pruebas';


        $conexion= new mysqli($host, $user, $password, $database);
        mysqli_set_charset($conexion,"utf8");
        /*&$consulta="SELECT * FROM PRODUCTOS WHERE SECCIÓN LIKE '%CER_MICA'";*/
        $consulta="SELECT * FROM PRODUCTOS WHERE SECCIÓN='$busqueda'";
        $result=mysqli_query($conexion,$consulta);


        while($fila= mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<table><tr><td>";

            echo $fila["SECCIÓN"] . "</td><td>";
            echo $fila["NOMBRE ARTÍCULO"] . "</td><td>";
            echo $fila["FECHA"] . "</td><td>";
            echo $fila["PAÍS DE ORIGEN"] . "</td><td>";
            echo $fila["PRECIO"] . "</td><td></tr></table>";
            echo "<br>";
            echo "<br>";
        }
       

       

        mysqli_close($conexion);
        ?>

    </body>
</html>

