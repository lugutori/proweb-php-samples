<!DOCTYPE html>
<!--
Antes de mostar esta página se debió ejecutar lo siguiente 
1. crear_db.php
2. crear_tabla.php
3. insertar_personas.php 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once dirname(__FILE__) . '/config.php';
            $str_datos = "";
            $con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
                if (mysqli_connect_errno()) {
                $str_datos.= "Error en la conexión: " . mysqli_connect_error();
            }
            $str_datos.='<table border="1" style="width:100%">';
            $str_datos.='<tr>';
            $str_datos.='<th>Nombre</th>';
            $str_datos.='<th>Apellido</th>';
            $str_datos.='</tr>';
            $sql = "SELECT * FROM Personas";
            $resultado = mysqli_query($con,$sql);
            while($fila = mysqli_fetch_array($resultado)) {
              $str_datos.='<tr>';
              $str_datos.= "<td>".$fila['Nombre']."</td> <td>".$fila['Apellido']."</td>";
              $str_datos.= "</tr>";
            }
            $str_datos.= "</table>";
            echo $str_datos;
            mysqli_close($con);
        ?>
    </body>
</html>
