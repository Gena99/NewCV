<?php
/**
 * Created by PhpStorm.
 * User: gena
 * Date: 26/01/2018
 * Time: 16:32
 */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$mailDestinataire ="gena@e64.net";
$subject = "Vous avez reçu un nouveau message de $name";
$subject ="=?UTF-8?B?".base64_encode($subject)."?=";
$entetes =
    'Content-type: text/html; charset=utf-8' . "\r\n" .
    "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
//mail($name, $email, $message, $mailDestinataire);
if(mail ($mailDestinataire, $subject, $message, $entetes)){
    die("Votre message a bien été envoyé. Merci");
}else{
    die("Votre message n'a pas être envoyé, merci de réessayer ultérireurement.");
}
//mail ($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
?>

