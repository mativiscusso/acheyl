<?php
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
    $to = "mativiscusso@gmail.com";
    $subject = "Mensaje Enviado";
    $contenido .= "Nombre: ".$_POST["nombre"]."\n";
    $contenido .= "Email: ".$_POST["email"]."\n\n";
    $contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
    $header = "From: mativiscusso@gmail.com\nReply-To:".$_POST["email"]."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    mail($to, $subject, $contenido ,$header);
    //     echo  '<script language="javascript">
    //                 window.onload = function() {
    //                     swal("Mensaje Enviado", "success");
    //                 }
    //             </script>';          
    // }
}      
header('Location: http://www.acheyl.com.ar/');
?>
