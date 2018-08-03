<?php
require __DIR__ . "/vendor/autoload.php";

$transport =  (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername('joaopaulo.queiroz.545@gmail.com')
        ->setPassword('071281jp');

$mailer = new Swift_Mailer($transport);

$body = <<<EMAIL

        <h> Envio de E-mail </h1>
        <p>Teste de envio de email do SwiftMailer</p>
        <button><a href="https://www.linkedin.com/feed/" style="color: #000000; text-decoration: none;"><strong>Acesse o meu linkedin</strong></a></button>
      
EMAIL;


        $message = (new Swift_Message('Um titulo'))
                  ->setFrom(['joaopaulo.queiroz.545@gmail.com' => 'João Paulo'])
                  ->setTo([
                   'afj033.aj@gmail.com' => 'Alan Jr',
                    'joaopaulo.queiroz.545@gmail.com' => 'João Paulo'])
                  ->setBody($body, 'text/html');
                  //copia oculta setBcc
$result = $mailer->send($message);

echo ($result)? 'Enviado' : 'erro';
