<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
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

		return $this->render('blog/index.html.twig', [
			'info' => $info,
		]);
	}

	/**
	 * @Route("/blog/{category}")
	 */

	public function blog_category(): Response
	{
		$info = 'Welcome to blog category page';

		return $this->render('blog/category.html.twig', [
			'info' => $info,
		]);
	}

	/**
	 * @Route("/blog/{category}/{id}")
	 */

	public function blog_detail(): Response
	{
		$info = 'Welcome to blog category page';

		return $this->render('blog/detail.html.twig', [
			'info' => $info,
		]);
	}

	/**
	 * @Route("/blog/{category}/{id}")
	 */

	public function contacts(): Response
	{
		$info = 'Welcome to contacts page';

		return $this->render('main/contacts.html.twig', [
			'info' => $info,
		]);
	}


}