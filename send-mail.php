<?php

$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$message = nl2br($_POST["message"]);

if( empty($firstname)
    || empty($lastname)
    || empty($email)
    || empty($message)) {
    
    echo "alert('Merci de renseigner tous les champs du formulaire');";
    exit;
}

$body = "
$message <br><br>

--------<br>
Ce message vous a été envoyé par le formulaire de contact de Aquakid.com
";

// Send mail
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: '.$lastname.' '.$firstname.' <'.$email.'>' . "\r\n";

mail("contact@jonathanpath.com", "Message sur Aquakid.com", $body, $headers); 