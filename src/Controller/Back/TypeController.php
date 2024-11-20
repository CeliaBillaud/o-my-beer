<?php

namespace App\Controller\Back;

use App\Entity\Type;
use App\Form\TypeType;
use App\Repository\TypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/types')]
class TypeController extends AbstractController
{
    #[Route('/', name: 'app_back_type_list', methods: ['GET'])]
    public function list(TypeRepository $typeRepository): Response
    {
        return $this->render('back/type/list.html.twig', [
            'types' => $typeRepository->findAll(),
        ]);
    }

    #[Route('/ajouter', name: 'app_back_type_new', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $type = new Type();
        $form = $this->createForm(TypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($type);
            $entityManager->flush();

            return $this->redirectToRoute('app_back_type_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/type/new.html.twig', [
            'type' => $type,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_type_show', methods: ['GET'])]
    public function show(Type $type): Response
    {
        return $this->render('back/type/show.html.twig', [
            'type' => $type,
        ]);
    }

    #[Route('/{id<\d+>}/modifier', name: 'app_back_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Type $type, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_back_type_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/type/edit.html.twig', [
            'type' => $type,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_back_type_delete', methods: ['POST'])]
    public function delete(Request $request, Type $type, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$type->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($type);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_back_type_list', [], Response::HTTP_SEE_OTHER);
    }
}
