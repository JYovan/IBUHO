<?php
/**
 * Autor: Ing.Giovanni Flores
 * Ultima modificación: 16-03-2013
 * 
 * **/
if (!empty($_REQUEST)) {
    extract($_REQUEST);
    $email_to = "ventas@ibuho.mx"; 
    $nombre = $txtNombre;
    $para = $txtEmail;
    $asunto = 'Mensaje desde wwww.ibuho.mx';
    $mensaje = "";
    $mensaje .= "Correo de: " . $txtEmail . "\n";
    $mensaje .= "Nombre: " . $txtNombre . "\n";
    $mensaje = "Mensaje: " . $txtMensaje . "\n";
    $cabeceras = 'From:' . $para . "\r\n" .
            'Reply-To: ' . $para . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    function is_valid_email($email) {
        return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
    } 
    mail($email_to, $asunto, $mensaje, $cabeceras); 
    mail("giovanni.flores@ibuho.mx", $asunto, $mensaje, $cabeceras); 
    print "1";
} else {
    print "0";
    var_dump($_REQUEST);
}