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
            function test_entero(){
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
                
            }
            
        ?>
    </body>
</html>
