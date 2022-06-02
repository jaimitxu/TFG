<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Eventos;
use App\Entity\Artistas;
use App\Entity\GenerosMusicales;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\ArtistasCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SYMFONYTICKETS');
    }

    public function configureMenuItems(): iterable
    {   
        yield MenuItem::linkToRoute('Home', 'fas fa-home','app_home');
        yield MenuItem::linkToCrud('Usuarios', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Eventos', 'fas fa-calendar', Eventos::class);
        yield MenuItem::linkToCrud('Artistas', 'fas fa-guitar', Artistas::class);
        yield MenuItem::linkToCrud('GenerosMusicales', 'fas fa-music', GenerosMusicales::class);
        
    }
}
