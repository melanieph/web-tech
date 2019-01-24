

<?php

$vorname=filter_var($_POST['name'], FILTER_SANITIZE_STRING;
$nachname=filter_var($_POST['nachname'], FILTER_SANITIZE_STRING;
$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL;
$studiengang=filter_var($_POST['studiengang'], FILTER_SANITIZE_STRING;

    echo    '<u> Herzlichen Dank' . $vorname . 'vom Studiengang ' . $studiengang . '! <br />' .
            'Wir haben eine Bestätigung Ihrer Anmeldung an die Email-Adresse '. $email . 'versendet. </u>'

?>