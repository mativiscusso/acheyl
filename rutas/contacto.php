<?php
    $toEmail = "mativiscusso@gmail.com";
    $mailHeaders = "From: " . $_POST["nombre"] . "<". $_POST["email"] .">\r\n";
    if(mail($toEmail, $_POST["mensaje"], $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>