<?php
    ///llamando a los campus
    $nombre = $_POST['nombre'];
    $empresa= $_POST['empresa'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $mensaje = $_POST['mensaje'];

    /// Datos para el correo
    $destinatario ="luandrada12@live.com";
    $asunto ="Contacto desde pagina web";

    $carta = "De: $nombre \n";
    $carta .= "Empresa: $empresa \n";
    $carta .= "Email: $email \n";
    $carta .= "Tel.: $telefono \n";
    $carta .= "Ciudad: $ciudad \n";
    $carta .= "Mensaje: $mensaje \n";

    ///// Enviando mensaje

    mail($destinatario, $asunto, $carta);
    // header('Location:msje-envio.html')

?>