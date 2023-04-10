<?php 
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    //$msg = wordwrap($msg,600);
    $to = "soluciones.graficas@goodboyzmc.com";
    $asunto="Consulta desde sitio web";
    $cuerpo="Nombre: ".$nombre."\n Correo de:".$correo."\n Mensaje: ".$mensaje."\n";
    $headers = "from: ".$correo;
    

    mail($to,$asunto,$cuerpo,$headers);

    // Envio ok

    echo '

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Mensaje Enviado</title>
            <meta name="viewport" content="width=device-width, initial-scale=1>
            <link rel="icon" type="image/x-icon" href="../img/Logos.png">
            <link rel="stylesheet" href="estilos-envio.css">
        </head>

        <body> 
       
            <h1>Muchas Gracias por contactarnos, pronto responderemos tu consulta</h1>

            <p>No te olvides de seguirnos en <a href="https://www.instagram.com/goodboyzmc/" target="_blank" rel="noopener noreferrer">Instagram</a> <br><br><a href="https://goodboyzmc.com/">volver a la pagina</a></p>

        </body>
        </html>
    
    ';
    

    /*
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "risoluto.ag@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
    */
?>
