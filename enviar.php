<?php
    //// para notificacion de errores
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    ////

    ///llamando a los campus
    $nombre = $_POST['nombre'];
    $empresa= $_POST['empresa'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $mensaje = $_POST['mensaje'];

    /// Datos para el correo
    $destinatario ="hola@wantfrom.es";

    $asunto ="Contacto desde pagina web";
    $from = "ventas@wantfrom.es";
    $headers = "From:" . $from;

    $carta = "De: $nombre \n";
    $carta .= "Empresa: $empresa \n";
    $carta .= "Email: $email \n";
    $carta .= "Tel.: $telefono \n";
    $carta .= "Ciudad: $ciudad \n";
    $carta .= "Mensaje: $mensaje \n";

    ///// Enviando mensaje
    mail($destinatario, $asunto, $carta, $headers);
    header('Location: msje-envio.html');
    die();
    // echo "The email message was sent.";
    

?>