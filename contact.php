<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use League\OAuth2\Client\Provider\Google;
// Charger l'autoload de Composer
require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

// Configuration OAuth 2.0
$provider = new Google([
    'clientId'     => '36066977164-mncf8prabos61fk3q5mocg5nelg7h2m6.apps.googleusercontent.com',
    'clientSecret' => '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',
    'redirectUri'  => 'http://localhost',
]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Configuration SMTP avec OAuth 2.0
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->AuthType = 'XOAUTH2';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';

        // Configuration de l'authentification OAuth
        $mail->oauthUserEmail = 'contact@newonefunding.com';
        $mail->oauthClientId = '36066977164-mncf8prabos61fk3q5mocg5nelg7h2m6.apps.googleusercontent.com';
        $mail->oauthClientSecret = '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';
        $mail->oauthRefreshToken = 'VOTRE_REFRESH_TOKEN';

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
