<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    $to = 'benhammermeister@icloud.com';
    $subject = 'Buchungsanfrage von ' . $name;
    $message = "Name: $name\n";
    $message .= "E-Mail: $email\n";
    $message .= "Eventbeschreibung: $event\n";
    
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Vielen Dank! Deine Anfrage wurde erfolgreich abgesendet.";
    } else {
        echo "Es gab ein Problem beim Absenden der Anfrage. Bitte versuche es später noch einmal.";
    }
}
?>
