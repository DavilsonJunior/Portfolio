<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $Comentarios = addslashes($_POST['Comentarios']);

    $to = "davilson_2007@yahoo.com.br";
    $subject = "My subject";
    $txt = $Comentarios;
    $headers = $email . "\r\n" .
    "CC: davilson_2007@yahoo.com.br";

    mail($to,$subject,$txt,$headers);

    header("Location: contato.php");
}