<?php
    // Iniciar variables de sesion
    session_start();

    // Incluir Google Client Library para PHP autoload file [Ojo con las rutas]
    require_once(__DIR__.'/../../vendor/autoload.php');

    // Configurar el cliente OAuth de Google [Asignando una variable a la clase Google_Client()]
    $google_client = new Google_Client();

    // Configurar la ID de cliente OAuth de Google
    $google_client->setClientId('183190977485-ptmgjfka3jd5fplp195khfshguv2fvcm.apps.googleusercontent.com');

    // Configurar la clave secreta de cliente OAuth de Google
    $google_client->setClientSecret('183190977485-ptmgjfka3jd5fplp195khfshguv2fvcm.apps.googleusercontent.com');

    // Configurar la URL de redireccionamiento OAuth de Google
    $google_client->setRedirectUri('http://localhost/Memrials/views/userWall.html');

    // Para obtener los datos de perfil y de correo electrónico del usuario
    $google_client->addScope('email');

    $google_client->addScope('profile');
?>