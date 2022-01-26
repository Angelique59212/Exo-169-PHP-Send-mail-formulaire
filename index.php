<?php
if (isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['message'])) {
    $to= trim(strip_tags($_POST['mail']));
    $message = trim(strip_tags($_POST['message']));
    $subject = "Email a envoyé";

    if (!filter_var($to,FILTER_VALIDATE_EMAIL)) {
        if(strlen($message <= 500)) {
            if (mail($to,$subject, $message)) {
                echo "Email envoyé avec succès vers $to ...";
            } else {
                echo "Échec de l'envoi de l'email...";
            }
        }
    }
}?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Votre formulaire</h1>
    <form action="formulaire.php" method="post">
        <label for="mail"></label>
        <input type="email" name="mail" id="mail" placeholder="renseignez votre mail" required>


        <label for="message"></label>
        <textarea name="message" id="message" cols="30" rows="10" maxlength="500" required></textarea>

        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>
