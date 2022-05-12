<?php

namespace App\Controller;

use App\Entity\Salas;
use App\Form\SalasType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/salas')]
class SalasController extends AbstractController
{
    #[Route('/', name: 'app_salas_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $salas = $entityManager
            ->getRepository(Salas::class)
            ->findAll();

        return $this->render('salas/index.html.twig', [
            'salas' => $salas,
        ]);
    }

    #[Route('/new', name: 'app_salas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sala = new Salas();
        $form = $this->createForm(SalasType::class, $sala);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sala);
            $entityManager->flush();

            return $this->redirectToRoute('app_salas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('salas/new.html.twig', [
            'sala' => $sala,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salas_show', methods: ['GET'])]
    public function show(Salas $sala): Response
    {
        return $this->render('salas/show.html.twig', [
            'sala' => $sala,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_salas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Salas $sala, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SalasType::class, $sala);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_salas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('salas/edit.html.twig', [
            'sala' => $sala,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salas_delete', methods: ['POST'])]
    public function delete(Request $request, Salas $sala, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sala->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sala);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_salas_index', [], Response::HTTP_SEE_OTHER);
    }
}
