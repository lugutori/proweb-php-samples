<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        crear_imagen();
        echo "<img src=imagen.png?".date("U").">";

        function  crear_imagen(){
                $im = imagecreate(200, 200) or die("Error en la creacion de imagenes");
                $color_fondo = imagecolorallocate($im, 255, 255, 0);   // amarillo

                $rojo = imagecolorallocate($im, 255, 0, 0);                  // rojo
                $azul = imagecolorallocate($im, 0, 0, 255);                 // azul
                imagerectangle ($im,   5,  10, 195, 50, $rojo); //rectangulo (borde)
                imagefilledrectangle ($im,   5,  100, 195, 140, $azul); //rectangulo (lleno)

                imagepng($im,"imagen.png");
                imagedestroy($im);
        }
   </body>
</html>
