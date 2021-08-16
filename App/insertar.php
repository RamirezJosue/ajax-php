<?php
    // require 'conexion.php';

    $base = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    $cadena = "INSERT INTO productos (Nombre, Marca, Modelo) VALUES";

    // Insertar a la tabale
    for ($i=0; $i < count($base); $i++) { 
        $cadena.="('".$base[$i]."', '".$marca[$i]."', '".$modelo[$i]. "')";
    }

    $cadena_final = substr($cadena, 0, -1);
    $cadena_final.=";";

    if ($mysqli -> query($cadena_final)):
        echo json_encode(array('error' => false));
    else:
        echo json_encode(array('error' => true));
    endif;
?>