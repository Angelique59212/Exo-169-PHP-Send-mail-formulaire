<?php
if (isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['message'])) {
    $to = trim(strip_tags($_POST['mail']));
    $message = trim(strip_tags($_POST['message']));
    $subject = "Email a envoyé";
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        if (strlen($message <= 500)) {
            if (mail($to, $subject, $message)) {
                echo "Email envoyé avec succès vers $to ...";
            } else {
                echo "Échec de l'envoi de l'email...";
            }
        }
    }
}