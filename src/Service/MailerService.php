<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailerService
{

    //  dependecy injection, we use Symfony MailerInterface
    public function __construct(
        private MailerInterface $mailer,
        private $ownerMail
    ) {
    }

    public function send(string $subject, $email, ?string $twigFile = null, ?array $data = null)
    {
        $email = (new TemplatedEmail())
            ->from($this->ownerMail)
            ->to($email)
            ->subject($subject)
            ->htmlTemplate($twigFile)
            ->context($data);

        $this->mailer->send($email);
    }
}