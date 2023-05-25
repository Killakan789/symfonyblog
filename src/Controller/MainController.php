<?php
    
    namespace App\Controller;

    use Psr\Log\LoggerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class MainController extends AbstractController
    {
        #[Route('/', name: 'index',methods: ['GET'])]
        public function index(): Response
        {
            return $this->render('main/index.html.twig');
        }
    
        #[Route('/contacts/', name: 'contacts',methods: ['GET'])]
        public function contacts(): Response
        {
            return $this->render('main/contacts.html.twig');
        }
    
        #[Route('/courses', name: 'courses',methods: ['GET'])]
        public function courses(): Response
        {
            return $this->render('main/courses.html.twig');
        }
    
        #[Route('/courses/{slug}', name: 'course',methods: ['GET'],requirements: ['page' => '\w+'])]
        public function course(string $slug): Response
        {
            return $this->render('main/course.html.twig',['slug'=>$slug]);
        }
    }