<?php
    include_once dirname(__FILE__) . '/config.php';
    $con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
    if (mysqli_connect_errno()) {
        echo "Error en la conexión: " . mysqli_connect_error();
    }
    $sql = "INSERT INTO Personas (Nombre, Apellido, Edad) VALUES ('Peter', 'Griffin',45)";
    if(mysqli_query($con,$sql)){
        echo "Se ha insertado a Peter Griffin";
    }
    else{
        echo "Error insertando a Peter Griffin";
    }
    $sql = "INSERT INTO Personas (Nombre, Apellido, Edad) VALUES ('Glenn', 'Quagmire',43)"
    if(mysqli_query($con,$sql)){
        echo "Se ha insertado a Glenn Quagmire";
    }
    else{
        echo "Error insertando a Glenn Quagmire";
    }
    mysqli_close($con);
?>
