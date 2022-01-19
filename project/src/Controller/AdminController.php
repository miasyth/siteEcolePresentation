<?php

namespace App\Controller;

use App\Entity\PDF;
use App\Entity\News;
use App\Entity\Text;
use App\Entity\Photo;
use App\Entity\Video;
use App\Entity\Classe;
use App\Entity\Equipe;
use App\Entity\User;
use App\Entity\Accueil;
use App\Entity\Background;
use App\Entity\ImageGroup;
use App\Entity\Presentation;
use App\Controller\AccueilCrudController;
use App\Controller\BackgroundCrudController;
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
        yield MenuItem::linkToCrud('Accueil', 'fas fa-home-alt', Accueil::class);
        yield MenuItem::linkToCrud('Background', 'fas fa-home-alt', Background::class);
        yield MenuItem::linkToCrud('Classe', 'fas fa-home-alt', Classe::class);
        yield MenuItem::linkToCrud('Equipe', 'fas fa-home-alt', Equipe::class);
        yield MenuItem::linkToCrud('ImageGroup', 'fas fa-home-alt', ImageGroup::class);
        yield MenuItem::linkToCrud('Mail', 'fas fa-home-alt', Mail::class);
        yield MenuItem::linkToCrud('News', 'fas fa-home-alt', News::class);
        yield MenuItem::linkToCrud('PDF', 'fas fa-home-alt', PDF::class);
        yield MenuItem::linkToCrud('Photo', 'fas fa-home-alt', Photo::class);
        yield MenuItem::linkToCrud('Presentation', 'fas fa-home-alt', Presentation::class);
        yield MenuItem::linkToCrud('Text', 'fas fa-home-alt', Text::class);
        yield MenuItem::linkToCrud('User', 'fas fa-home-alt', User::class);
        yield MenuItem::linkToCrud('Video', 'fas fa-home-alt', Video::class);
    }
}
