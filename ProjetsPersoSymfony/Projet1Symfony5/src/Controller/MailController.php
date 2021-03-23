<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class MailController extends AbstractController
{
    #[Route('/envoyer/mail', name: 'mail')]
    public function envoyerMail(MailerInterface $m): Response
    {
        $email = new Email();
        $email->from('zyriab@gmail.com')
            ->to('wad-20@interface3.be')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Le mail fonctionne!')
            ->text('Et c\'est si facile!!')
            ->html('<h3>Regardez la doc de Mailer pour plus d\'info</h3><br><a href=https://symfony.com/doc/current/mailer.html>https://symfony.com/doc/current/mailer.html</a>');

        $m->send($email);

        return $this->render('mail/envoyer_mail.html.twig');
    }
}
