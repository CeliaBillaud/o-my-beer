<?php

namespace App\Controller\Front;

use App\Entity\User;
use App\Form\UserType;
use App\Service\MailerService;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Part\File;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class UserController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    #[Route('/inscription', name: 'app_user_inscription', methods: ['GET', 'POST'])]
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, MailerService $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, ["custom_option" => "frontRegister"]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordHasher->hashPassword($user,$user->getPassword())
            );
            // Default role (for subscription from the front)
            $user->setRoles(["ROLE_USER"]);

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_user_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('omybeer.dev@gmail.com', 'O\'MyBeer'))
                    ->to($user->getEmail())
                    ->subject('Bienvenue dans l\'aventure O\'MyBeer !')
                    ->htmlTemplate('email/user_created.html.twig')
            );

            $this->addFlash('secondary', 'Votre compte a bien été créé, un email de confirmation vous a été envoyé.');

            return $this->redirectToRoute('app_user_connexion', [], Response::HTTP_SEE_OTHER);
        } else {
            return $this->render('front/user/registration.html.twig', [
                'formUser' => $form,
            ]);
        }   
    }

    /**
     * Verify a user's email from the confirmation link sent via email. If verification succeeds, the user is redirected to the homepage.
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     * @return Response
     */
    #[Route('/verify/email', name: 'app_user_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_homepage');
        }

        $this->addFlash('secondary', 'Votre email a bien été vérifié.');

        return $this->redirectToRoute('app_homepage');
    }

    #[Route(path: '/connexion', name: 'app_user_connexion')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
       
            return $this->render('front/user/login.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error,
            ]);
    }

    #[Route(path: '/deconnexion', name: 'app_user_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/mon-compte', name: 'app_user_account')]
    public function account(): Response
    {
        return $this->render('front/user/account.html.twig', [
            
        ]);
    }
}
