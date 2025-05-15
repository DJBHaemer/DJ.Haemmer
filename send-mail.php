<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formularwerte erhalten
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    // Empfänger-E-Mail-Adresse
    $to = "dj.haemmer@icloud.com"; // Deine E-Mail-Adresse
    $subject = "Buchungsanfrage von $name";

    // E-Mail-Inhalt
    $body = "Name: $name\n";
    $body .= "E-Mail-Adresse: $email\n";
    $body .= "Telefonnummer: $phone\n";
    $body .= "Event-Typ: $event\n";
    $body .= "Event-Datum: $date\n";
    $body .= "Nachricht: $message\n";

    // E-Mail-Header
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Vielen Dank für deine Buchungsanfrage! Wir melden uns in Kürze bei dir.</p>";
    } else {
        echo "<p>Es gab ein Problem beim Absenden deiner Anfrage. Bitte versuche es später noch einmal.</p>";
    }
}
?>
