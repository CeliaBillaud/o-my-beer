<?php

namespace App\Controller\Back;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\BrandRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/utilisateurs')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_back_user_list', methods: ['GET'])]
    public function list(UserRepository $userRepository, Request $request): Response
    {
        // display 25 users by page
        $pageNumber = $request->query->getInt('page', 1);
        $limit = 25;
        $users = $userRepository->paginateUsers($pageNumber, $limit);
        $maxPageCount = ceil($users->count() / $limit);
        
        return $this->render('back/user/list.html.twig', [
            'users' => $users,
            'selectedPage' => $pageNumber,
            'maxPageCount' => $maxPageCount,
        ]);
    }

    #[Route('/ajouter', name: 'app_back_user_new', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, ["custom_option" => "backCreate"]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordHasher->hashPassword($user,$user->getPassword()));
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_back_user_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('back/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id<\d+>}/modifier', name: 'app_back_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user , ["custom_option" => "backEdit"]);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_back_user_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_back_user_list', [], Response::HTTP_SEE_OTHER);
    }
}
