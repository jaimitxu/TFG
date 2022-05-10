<?php

namespace App\Controller;

use App\Entity\Artistas;
use App\Form\ArtistasType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/artistas')]
class ArtistasController extends AbstractController
{
    #[Route('/', name: 'app_artistas_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $artistas = $entityManager
            ->getRepository(Artistas::class)
            ->findAll();

        return $this->render('artistas/index.html.twig', [
            'artistas' => $artistas,
        ]);
    }

    #[Route('/new', name: 'app_artistas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $artista = new Artistas();
        $form = $this->createForm(ArtistasType::class, $artista);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($artista);
            $entityManager->flush();

            return $this->redirectToRoute('app_artistas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('artistas/new.html.twig', [
            'artista' => $artista,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_artistas_show', methods: ['GET'])]
    public function show(Artistas $artista): Response
    {
        return $this->render('artistas/show.html.twig', [
            'artista' => $artista,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_artistas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Artistas $artista, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArtistasType::class, $artista);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_artistas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('artistas/edit.html.twig', [
            'artista' => $artista,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_artistas_delete', methods: ['POST'])]
    public function delete(Request $request, Artistas $artista, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$artista->getId(), $request->request->get('_token'))) {
            $entityManager->remove($artista);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_artistas_index', [], Response::HTTP_SEE_OTHER);
    }
}
