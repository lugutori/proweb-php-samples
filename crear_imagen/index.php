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



        /* function test_entero(){
          $var_imprimir="";
          $numargs = func_num_args();
          $var_imprimir.="Numero de argumentos: $numargs </br>";
          if ($numargs >= 2) {
          $var_imprimir.= "Obteniendo segundo argumento: " . func_get_arg(1) . "<br/>";
          }
          $lista_args = func_get_args();
          for ($i = 0; $i < $numargs; $i++) {
          $var_imprimir.= "Argumento $i es: " . $lista_args[$i] . "<br/>";
          }
          echo $var_imprimir;
          }
          $var_uno = 10;
          $var_dos = 20;
          echo"-------Llamando sin argumentos <br/>";
          test_entero();
          echo"-------Llamando con 2 argumentos <br/>";
          test_entero($var_uno, $var_dos);
          /*function test_entero($uno,$dos){
          echo "soy un Entero";
          }
          function test_cadena(){
          echo "Soy una cadena";
          }
          function invocar($tipo){
          $nombre="test_".$tipo;
          $nombre();
          }
          try{
          invocar("entero");
          invocar("cadena");
          invocar("flotante");
          }catch(Exception $ex){

          } */
        ?>
    </body>
</html>
