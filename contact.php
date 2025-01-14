<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Configuration SMTP avec SSL
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.gmail.com'; // Serveur Google Workspace
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@newonefunding.com'; // Votre adresse email pro
        $mail->Password = 'Xeilos2024%'; // Votre mot de passe actuel
        $mail->SMTPSecure = 'tls'; // Utiliser SSL au lieu de TLS
        $mail->Port = 587; // Port SSL

        // Expéditeur et destinataire
        $mail->setFrom('contact@newonefunding.com', 'NewOneFunding');
        $mail->addAddress('contact@newonefunding.com');

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de contact';
        $mail->Body    = 'Vous avez reçu un nouveau message via le formulaire de contact.';

        // Envoyer l'email
        $mail->send();
        echo 'Message envoyé avec succès !';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
} else {
    echo 'Méthode non autorisée.';
}
?>
