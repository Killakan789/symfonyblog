<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'indexBlog',methods: ['GET'])]
    public function indexBlog(): Response
    {
        return $this->render('blog/index.html.twig');
    }
    
    #[Route('/blog/{page}', name: 'list',methods: ['GET'],requirements: ['page' => '\d+'])]
    public function list(int $page): Response
    {
        return $this->render('blog/indexPage.html.twig',['page'=>$page]);
    }
    
    #[Route('/blog/{slug}', name: 'post',methods: ['GET'],requirements: ['page' => '\w+'])]
    public function post(string $slug): Response
    {
        return $this->render('blog/post.html.twig',['slug'=>$slug]);
    }
}
?>