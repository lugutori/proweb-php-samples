<?php
    //Leer archivo linea por linea
    $file = fopen("miarchivo.txt", "r") or exit("Error de apertura!");
    //Imprimir cada línea del archivo
    while(!feof($file)){
        fgets($file). "<br>";
    }
    fclose($file);
    //Leer archivo caracter por caracter
    $file = fopen("miarchivo.txt", "r") or exit("Error de apertura!");
    //Imprimir cada caracter del archivo
    while(!feof($file)){
        fgetc($file). "<br>";
    }
    fclose($file);
?>
