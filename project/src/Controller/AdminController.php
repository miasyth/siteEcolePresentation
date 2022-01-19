<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class AdminController extends AbstractDashboardController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(AccueilCrudController::class)->generateUrl();
        
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Home', 'fas fa-home', 'accueil');
    }
}
