<?php
    //// para notificacion de errores
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    ////

    ///llamando a los campos
    $mailNewsletter = $_POST['mailNewsletter'];

    /// Datos para el correo
    $destinatario ="hola@wantfrom.es";\    


    $asunto ="Suscripcion Newsletter";
    $from = "ventas@wantfrom.es";
    $headers = "From:" . $from;

    $carta = "De:  $mailNewsletter \n";
    $carta .= " Quiero suscribirme al Newsletter de Wantfrom!\n";
    

    ///// Enviando mensaje

    mail($destinatario, $asunto, $carta, $headers);
    header('Location: msje-newsletter.html');
    die();
    //  echo "The email message was sent.";

?>