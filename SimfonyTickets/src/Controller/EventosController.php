<?php

namespace App\Controller;

use App\Entity\Eventos;
use App\Form\EventosType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/eventos')]
class EventosController extends AbstractController
{
    #[Route('/', name: 'app_eventos_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $eventos = $entityManager
            ->getRepository(Eventos::class)
            ->findAll();

        return $this->render('eventos/index.html.twig', [
            'eventos' => $eventos,
        ]);
    }

    #[Route('/new', name: 'app_eventos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evento = new Eventos();
        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evento);
            $entityManager->flush();

            return $this->redirectToRoute('app_eventos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('eventos/new.html.twig', [
            'evento' => $evento,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_eventos_show', methods: ['GET'])]
    public function show(Eventos $evento): Response
    {
        return $this->render('eventos/show.html.twig', [
            'evento' => $evento,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_eventos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Eventos $evento, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_eventos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('eventos/edit.html.twig', [
            'evento' => $evento,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_eventos_delete', methods: ['POST'])]
    public function delete(Request $request, Eventos $evento, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evento->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_eventos_index', [], Response::HTTP_SEE_OTHER);
    }
}
