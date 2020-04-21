<?php
    // Desde PHP 5.1
    date_default_timezone_set('UTC');
    // Imprime: Monday
    echo date("l")."</br>";
    // Imprime : Monday 6th of March 2017 03:12:46 PM
    echo date('l jS \of F Y h:i:s A')."</br>";
    // Imprime : July 1, 2000 is on a Saturday
    echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000))."</br>";
    /* uso de constantes en el parámetro de formato*/
    // Imprime : Mon, 07 Mar 2017 15:12:46 -0700
    echo date(DATE_RFC2822)."</br>";
    // Imprime : 2000-07-01T00:00:00+00:00
    echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))."</br>";
?>
