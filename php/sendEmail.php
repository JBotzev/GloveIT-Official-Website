<?php

function sendEmail($email, $name) {
    $subject = 'GloveIT Greeting';
    $message = 'Dear $name,' . "\r\n" .
    'Thanks for joining us on our incredible journey. With you our community gets bigger and stronger.' . "\r\n" .
    'From now on we‘ll update you with the latest info about our projects.' . "\r\n" .
    'Yours faithfully,' . "\r\n" .
    'GloveIT Team';
    $headers = 'From: gloveit@outlook.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email, $subject, $message, $headers);
}

?>