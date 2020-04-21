<?php
class PhpClass{
   var $var1;
   private $var2 = "constant string";
   function myfunc ($arg1, $arg2) {
      echo "Los argumentos son: $arg1 y $arg2"; 
      echo "<br>";
      echo "El valor de var1 es".$this->var1.
               "El valor de var2 es".$this->var2;
   }
}

$objeto = new PhpClass;
$objeto->var1 = "Algo";
echo $objeto->var1;
echo $objeto->myfunc(1,true);
?>
