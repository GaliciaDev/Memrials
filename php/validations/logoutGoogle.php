<?php

//incluir el archivo de configuracion para la API de Google de esta aplicacion
include('../backend/conectApiGoogle.php');

    //Reiniciar el token de acceso
    $google_client->revokeToken();

    //Eliminar datos de sesion
    session_destroy();

    // Al cerrar sesion redireccionar a la pagina de inicio
    header('location:../../index.php');

?>