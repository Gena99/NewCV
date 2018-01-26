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

//mail($name, $email, $message, $mailDestinataire);
mail ($mailDestinataire, $name, $message);
//mail ($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
?>



