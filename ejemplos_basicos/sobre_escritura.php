<?php
function test_entero(){
       $var_imprimir="";
       $numargs = func_num_args();
       $var_imprimir.="Numero de argumentos: $numargs </br>";
       if ($numargs >= 2) {
              $var_imprimir.= "Obteniendo segundo argumento: " . func_get_arg(1) . "<br/>";
              $lista_args = func_get_args();
              for ($i = 0; $i < $numargs; $i++) {
                     $var_imprimir.= "Argumento $i es: " . $lista_args[$i] . "<br/>";
             }
             echo $var_imprimir;
     }
}
$var_uno = 10;
$var_dos = 20;
echo"-------Llamando sin argumentos <br/>";
test_entero();
echo"-------Llamando con 2 argumentos <br/>";
test_entero($var_uno, $var_dos);
?>
