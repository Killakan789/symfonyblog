<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Entity\Category;
use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseVideo;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
    
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Coursessymf');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Courses', 'fas fa-list', Course::class);
        yield MenuItem::linkToCrud('Course videos', 'fas fa-video', CourseVideo::class);
        yield MenuItem::linkToCrud('Course categories', 'fas fa-list', CourseCategory::class);
        yield MenuItem::linkToCrud('Blog', 'fas fa-list', Blog::class);
        yield MenuItem::linkToCrud('Blog Categories', 'fas fa-list', Category::class);
        yield MenuItem::linkToLogout('Logout', 'fas fa-sign-out-alt');
    }
}
