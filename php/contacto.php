<?php 
    $nombre=post['nombre'];
    $email=post['correo'];
    $mensaje=post['mensaje'];



    $destinatario="risoluto.ag@gmail.com";
    $asunto=" Enviado desde el sitio web";

    $cuerpo.="Nombre: ".$nombre."\n";
    $cuerpo.="Email: ".$correo."\n\n";
    $cuerpo.="Mensaje: ".$mensaje."\n"


    // Envio ok

    mail($destinatario,$asunto,$cuerpo);

    echo $nombre,"gracias por contactarte proto te enviaremos una respuesta ! ! !";

?>