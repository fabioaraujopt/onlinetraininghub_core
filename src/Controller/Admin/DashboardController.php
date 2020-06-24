<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;
use App\Entity\Author;
use App\Entity\Payment;
use App\Entity\User;
use App\Entity\Video;
use App\Entity\VideoCategory;
use App\Entity\PaymentPlan;
use App\Entity\ArticleCategory;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Evolve Training Hub');
    }

    public function configureMenuItems(): iterable
    {
        return [
                MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
                MenuItem::section('Subscrições'),
                MenuItem::linkToCrud('Pagamentos', 'fa fa-file-text', Payment::class),
                MenuItem::linkToCrud('Utilizadores', 'fa fa-file-text', User::class),
                MenuItem::linkToCrud('Planos', 'fa fa-file-text', PaymentPlan::class),
                MenuItem::section('Video'),
                MenuItem::linkToCrud('Videos', 'fa fa-file-text', Video::class),
                MenuItem::linkToCrud('Categorias', 'fa fa-file-text', VideoCategory::class),
                MenuItem::section('Blog'),
                MenuItem::linkToCrud('Artigo', 'fa fa-file-text', Article::class),
                MenuItem::linkToCrud('Categorias', 'fa fa-file-text', ArticleCategory::class),
        ];
        
    }
}
