<?php

include_once "include/swift-mailer/lib/swift_required.php";

$subject = 'Hello from Mandrill, PHP!';
$from = array('you@yourdomain.com' =>'Your Name');
$to = array(
 'recipient1@example.com'  => 'Recipient1 Name',
 'recipient2@example2.com' => 'Recipient2 Name'
);

$text = "Mandrill speaks plaintext";
$html = "<em>Mandrill speaks <strong>HTML</strong></em>";

$transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
$transport->setUsername('MANDRILL_USERNAME');
$transport->setPassword('MANDRILL_PASSWORD');
$swift = Swift_Mailer::newInstance($transport);

$message = new Swift_Message($subject);
$message->setFrom($from);
$message->setBody($html, 'text/html');
$message->setTo($to);
$message->addPart($text, 'text/plain');

if ($recipients = $swift->send($message, $failures))
{
 echo 'Message successfully sent!';
} else {
 echo "There was an error:\n";
 print_r($failures);
}

?>