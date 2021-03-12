<?php
// src/Controller/MainController.php
namespace App\Controller;

use App\Entity\BlogCategory;
use App\Entity\Blog;
use App\Repository\BlogCategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class MainController extends AbstractController
{
	public function __construct()
	{

	}

	/**
     * @Route("/")
     */

    public function main(): Response
    {
	    $info = 'Welcome to home page';

        return $this->render('main/index.html.twig', [
            'info' => $info,
        ]);
    }

	/**
	 * @Route("/blog")
	 */

	public function blog(): Response
	{
		$info = 'Welcome to blog page';
		$categories = $this->getDoctrine()
			->getRepository(BlogCategory::class)
			->findAll();

		return $this->render('blog/index.html.twig', ['categories' => $categories]);
	}

	/**
	 * @Route("/blog/{category}")
	 */

	public function blog_category(Request $request)
	{
		$title = $request->attributes->get('category');
		$articles = $this->getDoctrine()
			->getRepository(BlogCategory::class)
			->findByCategoryTitle($title);
		return $this->render('blog/category.html.twig', [
			'blog' => $articles,
		]);
	}

	/**
	 * @Route("/blog/articles/{title}")
	 */

	public function blog_detail(Request $request)
	{
		$title = $request->attributes->get('title');
		$article = $this->getDoctrine()
			->getRepository(Blog::class)
			->findByTitle($title);
		return $this->render('blog/detail.html.twig', [
			'blog' => $article,
		]);
	}

}