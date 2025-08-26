<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // Exemple de traitement : envoi par mail
  $to = "votre.email@example.com";
  $subject = "Nouveau message de $name";
  $body = "De: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message envoyé avec succès.";
  } else {
    echo "Erreur lors de l'envoi du message.";
  }
}
?>
