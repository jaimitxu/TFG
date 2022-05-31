<?php

namespace App\Controller;

use App\Entity\Artistas;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    //Ruta a consejos sobre login
    #[Route('/home/ups', name: 'app_ups')]
    public function upsIndex(): Response
    {

        return $this->render('home/ups.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home/prueba', name: 'app_prueba')]
    public function pruebaIndex(EntityManagerInterface $entityManager): Response
    {

        $artista = $entityManager->getRepository(Artistas::class)->find(1);

        return $this->render('home/prueba.html.twig', [
            'controller_name' => 'HomeController',
            'artista' => $artista,
        ]);
    }


    //Ruta a los terminos de srvicio
    #[Route('/home/terminos', name: 'app_terminos')]
    public function terminosIndex(): Response
    {

        return $this->render('home/terminos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
}
