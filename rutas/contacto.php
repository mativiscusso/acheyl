<?php
    $toEmail = "contacto@acheyl.com.ar";
    $mailHeaders = "From: " . $_POST["nombre"] . "<". $_POST["email"] .">\r\n";
    if(mail($toEmail, $_POST["mensaje"], $mailHeaders)) {
        print "<p class='success'>Envio Exitoso</p>";
        header('Refresh: 1; URL=http://acheyl.com.ar');
        } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>