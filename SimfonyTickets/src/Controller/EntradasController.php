<?php

namespace App\Controller;

use App\Entity\Entradas;
use App\Form\EntradasType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/entradas')]
class EntradasController extends AbstractController
{
    #[Route('/', name: 'app_entradas_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $entradas = $entityManager
            ->getRepository(Entradas::class)
            ->findAll();

        return $this->render('entradas/index.html.twig', [
            'entradas' => $entradas,
        ]);
    }

    #[Route('/new', name: 'app_entradas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entrada = new Entradas();
        $form = $this->createForm(EntradasType::class, $entrada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entrada);
            $entityManager->flush();

            return $this->redirectToRoute('app_entradas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entradas/new.html.twig', [
            'entrada' => $entrada,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entradas_show', methods: ['GET'])]
    public function show(Entradas $entrada): Response
    {
        return $this->render('entradas/show.html.twig', [
            'entrada' => $entrada,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_entradas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entradas $entrada, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EntradasType::class, $entrada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_entradas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entradas/edit.html.twig', [
            'entrada' => $entrada,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entradas_delete', methods: ['POST'])]
    public function delete(Request $request, Entradas $entrada, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entrada->getId(), $request->request->get('_token'))) {
            $entityManager->remove($entrada);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_entradas_index', [], Response::HTTP_SEE_OTHER);
    }
}
