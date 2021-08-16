<?php
    $mysql = new mysql('localhost', 'root','','insertar');

    if ($mysql -> connect_errno) {
        echo "No se ha podido conectar con el servidor MySQL debido al error: ".$mysqli->connect_error;
    }