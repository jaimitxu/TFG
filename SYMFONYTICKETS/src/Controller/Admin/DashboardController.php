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

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(ArtistasCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        
        if ('ROLE_ADMIN' === $this->getUser()) {
             return $this->redirect('admin');
        }else{
             return $this->redirect('home');
        }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SYMFONYTICKETS');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Eventos', 'fas fa-calendar', Eventos::class);
        yield MenuItem::linkToCrud('Artistas', 'fas fa-guitar', Artistas::class);
        yield MenuItem::linkToCrud('GenerosMusicales', 'fas fa-music', GenerosMusicales::class);
        
    }
}
